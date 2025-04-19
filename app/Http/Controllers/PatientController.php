<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use App\Models\Share;
use App\Models\DoctorPatient;
use App\Models\UserShare;
use Illuminate\Http\Request;

class PatientController extends Controller 
{
    public function create()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('patients.create')->with('doctors',$doctors);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'fee' => 'required|numeric|min:0',
            'phone_number'     => 'nullable|string',
            'whatsapp_number'  => 'nullable|string',
        ]);

        $patient = Patient::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'phone_number'=> $request->input('phone_number'),
            'whatsapp_number'=> $request->input('whatsapp_number'),

        ]);
    
       // $patient->doctors()->attach($request->input('user_id'), ['total_fee' => $request->input('fee')]);
       // return redirect()->route('patients.index')->with('success', 'Patient created successfully.');

        $doctorId = $request->input('user_id');
        $doctorPatient = DoctorPatient::create([
            'user_id' => $doctorId,
            'patient_id' => $patient->id,
            'total_fee' => $request->input('fee'),
        ]);
    
        $existingShare = Share::where('user_id', $doctorId)->whereNull('deleted_at')->first();

        if ($existingShare) {
            $existingShare->delete(); 
        }

        Share::create([
            'user_id' => $doctorId,
            'share' => $request->input('fee'), 
        ]);

        $latestShare = Share::where('user_id', $doctorId)
        ->orderBy('created_at', 'desc')
        ->first();
        
    if ($latestShare) {
        UserShare::create([
            'share_id' => $latestShare->id, 
            'user_id' => $doctorId, 
            'doctor_patient_id' => $doctorPatient->id, 
            'user_share' => $latestShare->share, 
            'patient_fee' => $request->input('fee'), 
        ]);
    }
     $totalUserShare = UserShare::where('doctor_patient_id', $doctorPatient->id)
            ->sum('user_share');
             UserShare::updateOrCreate(
            ['user_id' => $doctorId, 'doctor_patient_id' => $doctorPatient->id],
            ['user_share' => $totalUserShare, 'patient_fee' => $request->input('fee')]);
            $totalUserShare = UserShare::where('doctor_patient_id', $doctorPatient->id)->sum('user_share');

             UserShare::updateOrCreate(
            ['user_id' => $doctorId, 'doctor_patient_id' => $doctorPatient->id],
             ['user_share' => $totalUserShare, 'patient_fee' => $request->input('fee')]);
              return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
                 }
    public function index()
    {
        $patients = Patient::all();
        return view ('patients.index')->with('patients',$patients);
    }
}