<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    //add e-commerce 
    public function addEcommerceSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->ecommerce_id;
        $name = $request->ecommerce_name;
        $image = $request->file('image');
        $imageName = "assets/images/ecommerce/" . $name . '.' . $image->extension();
        $image->move("assets/images/ecommerce", $imageName);
        // $image->move("assets/images/subcategory", "{$name}.{$imageName}");

        $ecommerce = new Ecommerce();
        $ecommerce->id = $id;
        $ecommerce->name = $name;
        $ecommerce->logo = $imageName;
        $ecommerce->save();
        return back()->with('ec_added', 'Ecommerce has been added successfully!');
    }

    public function updateEcommerce(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        $name = $request->ecommerce_name;
        $image = $request->file('image');

        if ($image == null) {
            $ecommerce = Ecommerce::find($request->ecommerce_id);
            $ecommerce->name = $name;
            $ecommerce->save();
            return back()->with('sc_updated', 'Subcategories has been updated successfully!');
        } else {
            $imageName = "assets/images/ecommerce/" . $name . '.' . $image->extension();
            $image->move("assets/images/ecommerce", $imageName);


            $ecommerce = Ecommerce::find($request->ecommerce_id);
            $ecommerce->name = $name;
            $ecommerce->logo = $imageName;
            $ecommerce->save();
            return back()->with('ec_updated', 'Ecommerce has been updated successfully!');
        }
    }

    //Get All subcategories
    public function getEcommerces()
    {
        $ecommerces = DB::table('ecommerces')->get();
        return view('admin.ecommerce', compact('ecommerces'));
    }
}
