<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.profile', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,'.$admin->id,
            'password' => ['required', 'confirmed'],
        ]);

        

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;

        $admin->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
