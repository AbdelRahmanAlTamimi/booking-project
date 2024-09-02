<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function index()
    {
        $userFromDB=User::all();
        return view ('AdminDashboard/user/index',['users'=>$userFromDB]);
    
    
}
public function show(User $user)
    {

        return view ('AdminDashboard/user/show',['users'=> $user  ]);

    }
    public function create(){

        $users=User::all();
        return view('AdminDashboard/user/create',['users'=>$users]);
    }

    public function store(){
    
        $first_name=request()->first_name;
        $last_name=request()->last_name;
        $email=request()->email;

        User::create([
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'email'=>$email,
        'password'=>$password,
        ]);
        return to_route('users.index');
    }

    public function edit(User $user){
        // $users=User::all();
        return view('AdminDashboard/user/edit',['user'=>$user]);
    
    }

    public function update($userId){
        $first_name=request()->first_name;
        $last_name=request()->last_name;
        $email=request()->email;
        $password=request()->password;

        $singlePostFromDB=User::find($userId);

        $singlePostFromDB->update([
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'user_id'=>$email,
            'password'=>$password,

        ]);
        return to_route('users.show',$userId);
    }

    public function destroy($userId){
      
User::where('id',$userId)->delete();
        return to_route('users.index')->with('deleted sucssfully');

    }
}
