<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admins;
use Carbon\Carbon;

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
                
                if(isset($data['redirect']))
                    return redirect($data['redirect']);
                else
                    return redirect('/');
            }
            else
                return back()->with('msg', 'Wrong password. Try again or click Forgot password to reset it.');
        }
        else
        {
            if (DB::table('users')->where('email', $data['name'])->exists())
            {
                if ($data['password'] == DB::table('users')->where('email', $data['name'])->value('password')){
                    $request->session()->put('user', DB::table('users')->where('email', $data['name'])->value('username'));
                    $request->session()->put('type', DB::table('users')->where('email', $data['name'])->value('type'));
                    $request->session()->put('email', DB::table('users')->where('username', $data['name'])->value('email'));
                    
                    if(isset($data['redirect']))
                        return redirect($data['redirect']);
                    else
                        return redirect('/');
                }
                else
                    return back()->with('msg', 'Wrong password. Try again or click Forgot password to reset it.');
            }
            else
            {
                return back()->with('msg', "Couldn't find your Codeaffil Account. Register a new Codeaffil Account.");
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

        $request->session()->put('profile', "assets\images\user-profile\default.jpg");
        $request->session()->put('user', DB::table('users')->where('username', $data['name'])->value('username'));
        $request->session()->put('type', DB::table('users')->where('username', $data['name'])->value('type'));
        $request->session()->put('email', DB::table('users')->where('username', $data['name'])->value('email'));
        
        if($data['redirect'])
            return redirect($data['redirect']);
        else
            return redirect('/');
    }

    // get all customers with filter
    public function getCustomers(Request $request){
        $filter = $request->filter;
        $search = $request->search;
if(isset($search)){
    $customers = DB::table('users')
    ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
    ->join('customers','customers.username', '=', 'users.username')
    ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
    ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
    ->where('users.username', 'LIKE', "%{$search}%")
    ->groupBy('users.username')
->orderBy('customers.id', 'ASC')
->paginate(10);
return view('admin.customers_list',compact('customers','search'));
}
else{
        switch($filter){
            case 1:
                $customers = DB::table('users')
                ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                ->join('customers','customers.username', '=', 'users.username')
                ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                ->groupBy('users.username')
            ->orderBy('customers.id', 'ASC')
            ->paginate(10);
            return view('admin.customers_list',compact('customers'));
            break;

            case 2:
                $customers = DB::table('users')
                ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                ->join('customers','customers.username', '=', 'users.username')
                ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                ->groupBy('users.username')
            ->orderBy('customers.id', 'DESC')
            ->paginate(10);
            return view('admin.customers_list',compact('customers'));
            break;

            case 3:
                $customers = DB::table('users')
                ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                ->join('customers','customers.username', '=', 'users.username')
                ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                ->groupBy('customers.id')
                ->orderBy('total_visits', 'DESC')
                ->paginate(10);
                return view('admin.customers_list',compact('customers'));
                break;

                case 4:
                    $customers = DB::table('users')
                    ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                    ->join('customers','customers.username', '=', 'users.username')
                    ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                    ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                    ->groupBy('customers.id')
                    ->orderBy('total_views', 'DESC')
                    ->paginate(10);
                    return view('admin.customers_list',compact('customers'));
                    break;

                    case 5:
                        $customers = DB::table('users')
                        ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                        ->join('customers','customers.username', '=', 'users.username')
                        ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                        ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                        ->groupBy('customers.id')
                        ->orderBy('total_clicks', 'DESC')
                        ->paginate(10);
                        return view('admin.customers_list',compact('customers'));
                        break;

            default:
            $customers = DB::table('users')
                ->select('users.email','customer_logs.last_visit','customers.*', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('SUM(customer_logs.no_of_visit) as total_visits') )
                ->join('customers','customers.username', '=', 'users.username')
                ->leftJoin('user_product_logs','user_product_logs.customer_id', '=', 'customers.id')
                ->leftJoin('customer_logs','customer_logs.customer_id', '=', 'customers.id')
                ->groupBy('users.username')
            ->orderBy('users.username', 'DESC')
            ->paginate(10);
            return view('admin.customers_list',compact('customers'));
            break;
        }
    }
    }

    //Add admin view
    public function addAdmin(){
        return view('admin.add_admin');
    }


    //get all admins
    public function getAdmins(){
        $admins = DB::table('users')
        ->join('admins','admins.username', '=', 'users.username')
        ->get();
        return view('admin.admins_list',compact('admins'));
    }

    //add admin
   public function addAdminSubmit(Request $request){
    $validated = $request->validate([
        'username' => 'required|min:3|max:10|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'
        
    ]);
        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'type' => "admin"
        ]);
        DB::table('admins')->insert([
            'username' => $request->username
            
        ]);
        return back()->with('admin_added','Admin has been added successfully!');

        // $username = $request->user_name;
        // $email = $request ->email;
        // $password = $request->password;
        // $type = "admin";

        // $admin = new Admins();

        // $user = new User();
        // $user -> username = $username;
        // $user -> email = $email;
        // $user ->password = $password;
        // $user -> type = $type;
        // $user->created_at=Carbon::now();
        // $user->updated_at=now();
        // $user->save();
        // $user->admins()->save($admin);
        // return back()->with('admin_added','Admin has been added successfully!');
    }

//Add admin profile
    public function adminProfile(){
        $user = DB::table('admins')->where('username', session('user'))->first();
        $email = DB::table('users')->where('username', session('user'))->value('email');
        
            return view('admin.profile',compact('user', 'email'));   
        
    }
    
    function admin_info_add(Request $request)
    {       
        DB::table('admins')
        ->insert([
            'username'=>session('user'),
            'phone_no'=> $request->phone_no,
            'f_name'=> $request->f_name,
            'l_name'=> $request->l_name
        ]);
        return back()->with('admin_updated','Details has been updated successfully!');

       
    }

    //update admin profile

    function admin_info_update(Request $request)
    {      
        $user = session('user');
        $phone_no = $request->phone_no;
        $l_name = $request->l_name;
        $f_name = $request ->f_name;
        $image = $request->file('image');

        if($image==""){
            $admins = Admins::where('username', session('user'))->first();
            $admins ->l_name = $l_name;
            $admins ->f_name = $f_name;
            $admins ->phone_no = $phone_no;
            $admins ->save();
            return back()->with('sc_updated','Subcategories has been updated successfully!');
        }else{
            $imageName="assets/images/user-profile/".session('user').'.'.$image->extension();
            $image->move("assets/images/user-profile/",$imageName);

            $admins = Admins::where('username', session('user'))->first();
            $admins ->l_name = $l_name;
            $admins ->f_name = $f_name;
            $admins ->phone_no = $phone_no;
            $admins ->image = $imageName;
            $admins ->save();
            return back()->with('sc_updated','Subcategories has been updated successfully!');
        }
        
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
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $user = DB::table('customers')->where('username', session('user'))->first();
        $email = DB::table('users')->where('username', session('user'))->value('email');
        return view('profile',compact('user', 'email', 'subcategories','categories', 'ecommerces'));
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



