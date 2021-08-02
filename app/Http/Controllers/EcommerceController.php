<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    //
    public function addSubEcommerceSubmit(Request $request)
    {
        $id = $request->ecommerce_id;
        $name = $request->ecommerce_name;
        $image = $request->file('image');
        $imageName=$name.'.'.$image->extension();
        $image->move("assets/images/ecommerce",$imageName);
        // $image->move("assets/images/subcategory", "{$name}.{$imageName}");

        $ecommerce = new Ecommerce();
        $ecommerce -> id = $id;
        $ecommerce -> name = $name;
        $ecommerce ->logo = $imageName;
        $ecommerce ->save();
        return back()->with('ec_added','Ecommerce has been added successfully!');

    }

    // public function updateSubCategory(Request $request)
    // {
        
    //     $name = $request->subcategory_name;
    //     $image = $request->file('image');

    //     if($image==null){
    //         $subcategory = subcategory::find($request->subcategory_id);
    //         $subcategory ->name = $name;
    //         $subcategory ->save();
    //         return back()->with('sc_updated','Subcategories has been updated successfully!');
    //     }
    //     else{
    //     $imageName=$name.'.'.$image->extension();
    //     $image->move("assets/images/subcategory",$imageName);
        

    //     $subcategory = subcategory::find($request->subcategory_id);
    //     $subcategory ->name = $name;
    //     $subcategory ->image = $imageName;
    //     $subcategory ->save();
    //     return back()->with('sc_updated','Subcategories has been updated successfully!');

    //     }
    // }

    //Get All subcategories
    public function getEcommerces(){
        $ecommerces = DB::table('ecommerces')->get();
        return view('admin.ecommerce',compact('ecommerces'));
    }


    // //delete categories
    // public function deleteSubCategory($id){
    //     $subcategories = DB::table('subcategories')->where('id',$id)->delete();
    //     return back()->with('sc_deleted','Subcategories has been deleted successfully!');
    // }
}
