<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function Brands(){
        $brand=Brand::paginate(2);
        return view('brand.brands',compact('brand'));
    }
    public function BrandCreate(){
        return view('brand.brand-create');
    }
    public function BrandStore(Request $request){

       Brand::create([
        'name'=>$request->brand_name,
        'description'=>$request->description,
        'image'=>$request->image
       ]);
       return redirect()->back();
    }
}
