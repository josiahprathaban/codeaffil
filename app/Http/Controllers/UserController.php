<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    function getUser(){
        return User::all();
    }

    function login(Request $request){
        $data = $request->input();
        if(DB::table('users')->where('username', $data['name'])->exists())
        {
            if ($data['password'] == DB::table('users')->where('username', $data['name'])->value('password'))
            {
                $request->session()->put('user', DB::table('users')->where('username', $data['name'])->value('username'));
                $request->session()->put('type', DB::table('users')->where('username', $data['name'])->value('type'));
                return redirect('/');
            }
            else
                return "Wrong password. Try again or click Forgot password to reset it.";
        }
        else
        {
            if (DB::table('users')->where('email', $data['name'])->exists())
            {
                if ($data['password'] == DB::table('users')->where('email', $data['name'])->value('password'))
                    return DB::table('users')->where('email', $data['name'])->first();
                else
                    return "Wrong password. Try again or click Forgot password to reset it.";
            }
            else
            {
                return "Couldn't find your Codeaffil Account";
            }
        }
    }

    function register(Request $request){
        $data = $request->input();
        DB::table('users')->insert([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'type' => "customer"
        ]);

        $request->session()->put('user', DB::table('users')->where('username', $data['name'])->value('username'));
        $request->session()->put('type', DB::table('users')->where('username', $data['name'])->value('type'));
        return redirect('/');
    }

    //Add admin
    public function addAdmin(){
        return view('admin.add_admin');
    }

   public function addAdminSubmit(Request $request){
        DB::table('users')->insert([
            'username' => $request->user_name,
            'email' => $request->email,
            'password' => $request->password,
            'type' => "admin"
        ]);
        return back()->with('admin_added','Admin has been added successfully!');
    }

}
// Wrong password. Try again or click Forgot password to reset it.