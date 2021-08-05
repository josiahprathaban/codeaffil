<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class SlidersController extends Controller
{
    //
    public function Sliders()
    {
        $sliders = DB::table('sliders')->paginate(6);
        return view('admin.sliders',compact('sliders'));
    }

    public function addSlider(Request $request)
    {
        $description = $request->description;
        $image = $request->file('image');
        $imageName="assets/images/banner-image/banner_".time().'.'.$image->extension();
        $image->move("assets/images/banner-image",$imageName);

        $sliders = new Slider();
        $sliders->description = $description;
        $sliders-> image = $imageName;
        $sliders->save();
        return back()->with('sl_added','Slider has been added successfully!');

    }

    public function updateSlider(Request $request)
    {
        $id = $request->id;
        $description = $request->description;
        $image = $request->file('image');
        $imageName="assets/images/banner-image/banner_".time().'.'.$image->extension();
        $image->move("assets/images/banner-image",$imageName);

        $sliders = Slider::find($id);
        $sliders->description = $description;
        $sliders-> image = $imageName;
        $sliders->save();
        return back()->with('sl_updated','Slider has been added successfully!');
    }
}
