<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fruit;
use Image;

class FruitController extends Controller
{
    public function FruitView()
    {
        $fruits = Fruit::latest()->get();
        return view('backend.brand.brand_view',compact('fruits'));
    }
    public function BrandStore(Request $request)
    {
        $request->validate([
           'fruit_name_en' => 'required',
           'fruit_name_fa' => 'required',
           'fruit_image' => 'required',
        ],[
           'fruit_name_en.required' => 'وارد کردن نام انگلیسی برند',
           'fruit_name_fa.required' => 'وارد کردن نام فارسی برند',
            
        ]);
        $image = $request->file('fruit_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

        Fruit::insert([
            'fruit_name_en' => $request->fruit_name_en,
            'fruit_name_fa' => $request->fruit_name_fa,
            'fruit_slug_fa' => strtolower(str_replace(' ', '-', $request->fruit_name_fa)),
            'fruit_slug_en' => str_replace(' ', '-', $request->fruit_name_en),
            'fruit_image' => $save_url,
 
        ]);
        $notification = array(
            'message' => 'برند با موفقیت اضافه شد', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
