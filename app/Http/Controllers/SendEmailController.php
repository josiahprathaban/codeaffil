<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;

class SendEmailController extends Controller
{
    function index()
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $nosearch = 1;
        return view('contact', compact('subcategories', 'categories', 'ecommerces', 'nosearch'));
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'subject'  => $request->subject,
            'message'   =>   $request->message,
            'email'   =>   $request->email
        );

        Mail::to('josiah.prathaban@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
