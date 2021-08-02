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
                $request->session()->put('email', DB::table('users')->where('username', $data['name'])->value('email'));

                if( DB::table('customers')->where('username', session('user'))->value('image') != NULL)
                    $request->session()->put('profile', DB::table('customers')->where('username', session('user'))->value('image'));
                else 
                    $request->session()->put('profile', "assets\images\user-profile\default.jpg");
                return redirect('/');
            }
            else
                return "Wrong password. Try again or click Forgot password to reset it.";
        }
        else
        {
            if (DB::table('users')->where('email', $data['name'])->exists())
            {
                if ($data['password'] == DB::table('users')->where('email', $data['name'])->value('password')){
                    $request->session()->put('user', DB::table('users')->where('email', $data['name'])->value('username'));
                    $request->session()->put('type', DB::table('users')->where('email', $data['name'])->value('type'));
                    $request->session()->put('email', DB::table('users')->where('username', $data['name'])->value('email'));
                    return redirect('/');
                }
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


        DB::table('customers')->insert([
            'username' => $data['name']
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

    function profile_upload(Request $request)
    {
        $imageName = session('user')."_profile";
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $file->move("assets/images/user-profile", "{$imageName}.{$ext}");
        
        DB::table('customers')
              ->where('username', session('user'))
              ->update(['image' => "assets/images/user-profile/"."{$imageName}.{$ext}"]);

        $request->session()->put('profile', DB::table('customers')->where('username', session('user'))->value('image'));
        return back();
    }

    function info_update(Request $request)
    {        
        $data = $request->input();
        DB::table('customers')
              ->where('username', session('user'))
              ->update([
                  'phone_no' => $data['phone'],
                  'l_name' => $data['l_name'],
                  'f_name' => $data['f_name']
                ]);
                return back();
    }

    public function getUserProfile(){
        $user = DB::table('customers')->where('username', session('user'))->first();
        $email = DB::table('users')->where('username', session('user'))->value('email');
        return view('profile',compact('user', 'email'));
    }

    function change_password(Request $request)
    {        
        $data = $request->input();

        if($data['current_password'] == DB::table('users')->where('username', session('user'))->value('password'))
        {
            DB::table('users')
              ->where('username', session('user'))
              ->update([
                  'password' => $data['new_password']
                ]);
                return back();
        }
        else
        {
            return back()->with('error','Fail to chang password! The curent password you entered was wrong!');
        }
    }
}



