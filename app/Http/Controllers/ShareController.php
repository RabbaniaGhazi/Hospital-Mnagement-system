<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Share;
use App\Models\Patient;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('shares.create')->with('users' ,$users);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'share' => 'required|numeric|min:0',
        ]);

        $existingShare = Share::where('user_id', $request->user_id)->whereNull('deleted_at')->first();
        if ($existingShare) {
            $existingShare->delete(); 
        }
        
        Share::create([
            'user_id' => $request->user_id,
            'share' => $request->share,
        ]);

        return redirect()->route('shares.create')->with('success', 'Share saved successfully!');
    }

    public function edit($id)
    {
        $share = Share::where('user_id', $id)->whereNull('deleted_at')->first();
        $users = User::all();
        return view('shares.edit')->with(['share'=> $share,
        'users'=>$users ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'share' => 'required|numeric|min:0',
        ]);

        $existingShare = Share::where('user_id', $id)->whereNull('deleted_at')->first();
        if ($existingShare) {
            $existingShare->delete();
        }
        Share::create([
            'user_id' => $id,
            'share' => $request->share,
        ]);

        return redirect()->route('shares.create')->with('success', 'Share updated successfully!');
    }
}