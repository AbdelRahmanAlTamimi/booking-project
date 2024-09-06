<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalUsers = \App\Models\User::count(); 

        $searchQuery = $request->input('search'); 
        $roleFilter = $request->input('role'); 
        $perPage = min($request->get('per-page', 5), $maxPerPage); 

        $query = \App\Models\User::query();

        if ($roleFilter) {
            $query->where('role', $roleFilter);
        }

        if ($searchQuery) {
            $query->where(function ($query) use ($searchQuery) {
                $query->where('first_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('email', 'like', '%' . $searchQuery . '%')
                    ->orWhere('id', 'like', '%' . $searchQuery . '%')
                    ->orWhere('role', 'like', '%' . $searchQuery . '%');
            });
        }

        $users = $query->paginate($perPage);

        return view('AdminDashboard.user.index', compact('users', 'totalUsers', 'searchQuery'));
    }

    public function show($id)
    {
        $deletedUsers = User::onlyTrashed()->paginate(10);

        return view('AdminDashboard.user.deleted', compact('deletedUsers'));
    }
    public function showDeleted()
{
    $deletedUsers = User::onlyTrashed()->paginate(10); 

    return view('AdminDashboard.user.deleted', compact('deletedUsers'));
}
public function restore($id)
{
    $user = User::onlyTrashed()->findOrFail($id);
    $user->restore();

    return redirect()->route('user.deleted')->with('success', 'User restored successfully.');
}

public function forceDelete($id)
{
    $user = User::onlyTrashed()->findOrFail($id);
    $user->forceDelete();

    return redirect()->route('user.deleted')->with('success', 'User deleted permanently.');
}
    
    public function create()
    {

        $users = User::all();
        return view('AdminDashboard/user/create', ['users' => $users]);
    }

    public function store()
    {

        $first_name = request()->first_name;
        $last_name = request()->last_name;
        $email = request()->email;
        $password = request()->password;
        $role = request()->role;

        User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $password,
            'role' => $role,
        ]);
        return to_route('users.index')->with('success', 'User created successfully');
    }

public function edit($id)
{
    $user = User::findOrFail($id);
    $totalUsers = User::count();
    return view('AdminDashboard.user.edit', compact('user', 'totalUsers')); 
}


    

    public function update($userId)
    {
        $first_name = request()->first_name;
        $last_name = request()->last_name;
        $email = request()->email;
        $password = request()->password;
        $role = request()->role;

        $singlePostFromDB = User::find($userId);

        $singlePostFromDB->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_id' => $email,
            'password' => $password,
            'role' => $role,

        ]);
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($userId)
    {

        User::where('id', $userId)->delete();
        return to_route('users.index')->with('success', 'User deleted successfully.');

    }
}
