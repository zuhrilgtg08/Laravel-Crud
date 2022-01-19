<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

class ProfileController extends Controller
{


    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function profile(Request $request, $id)
    {
        $user = User::findOrfail($id);
        if($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'password' => 'required',
        ]);
        if (Hash::check($request->password, $user->password)) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $filename
            ]);
            return back()->with('success', 'Profil berhasil diubah');
        } else {
            return back()->with('error', 'Password Anda tidak sesuai');
        }
    }

    public function password()
    {
        $user = User::findOrfail(auth()->user()->id);
        return view('profile.changePassword', compact('user'));
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'current_password'=> 'required',
            'new_password' => 'required|min:8|same:confirm-password',
        ]);
        $user = User::findOrfail($id);
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
            return back()->with('success', 'Password berhasil diubah');
        } else {
            return back()->with('error', 'Password lama Anda tidak sesuai');
        }
    }
}
