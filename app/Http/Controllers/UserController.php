<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Patient;
use App\Models\Share;
use App\Models\UserShare;
use App\Models\DoctorPatient;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UserController
{
   public function index()
   {
    $users = User::all();
    return view ('users.index')->with('users' ,$users);
   }
   public function create()
   {
  
       return view('users.create');
   }
   public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:staff,doctor'
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'role' => $request->get('role'),
        ]);
        $users = User::all();

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit')->with('user' ,$user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:staff,doctor',
            'password' => 'nullable|min:6',
        ]);

        //$user->update($request->all());
        $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->role = $request->input('role');
       
    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    $user->save();
    $users = User::all();
     return redirect()->route('users.index')->with('success', 'User updated successfully!');
}
    public function overview(Request $request)
    {
        $timePeriod = $request->get('time_period', 'today');
        $today = Carbon::today();
        
        $dateRanges = [
            'today' => [
                'start' => $today->startOfDay(),
                'end' => $today->endOfDay(),
            ],
            'last_week' => [
                'start' => $today->subWeek()->startOfWeek(),
                'end' => $today->endOfWeek(),
            ],
            'last_month' => [
                'start' => $today->subMonth()->startOfMonth(),
                'end' => $today->endOfMonth(),
            ],
            'yearly' => [
                'start' => $today->subYear()->startOfYear(),
                'end' => $today->endOfYear(),
            ],
        ];

        $dateRange = $dateRanges[$timePeriod] ?? $dateRanges['today'];

        $totalPatients = DoctorPatient::whereBetween('created_at', [$dateRange['start'], $dateRange['end']])
            ->distinct('patient_id') 
            ->count('patient_id');

        $totalPayment = DoctorPatient::whereBetween('created_at', [$dateRange['start'], $dateRange['end']])
            ->sum('total_fee');

         $totalUserShares = UserShare::whereHas('share', function ($query) use ($dateRange)
          {
            $query->whereBetween('created_at', [$dateRange['start'], $dateRange['end']]);
            })->sum('user_share');
       
            return view('users.overview')->with([
                'totalPatients' => $totalPatients,
                'totalPayment' => $totalPayment,
                'totalUserShares' => $totalUserShares, // New total for user shares
                'timePeriod' => $timePeriod,
            ]);
    }
}