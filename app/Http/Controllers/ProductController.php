<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function Products(){
        $pro=Product::paginate(3);
       return view('backend.product.products',compact('pro')); 
    }
    public function ProductCreate(){
        return view('backend.product.product-create-form');
    }
    public function ProductStore(Request $request){
        // dd($request->all());

     $validation=Validator::make($request->all(),[
        'sub_category_name'=>'required',
        'prod_name'=>'required',
        'description'=>'required',
        'buy_price'=>'required',
        'sell_price'=>'required'

     ]);
     if($validation->fails()){
        notify()->error($validation->getMessageBag());
        return redirect()->back();
     }


     //file upload
     $fileName='';
     if($request->hasFile('image'))
     {
        //genarate a unique name
        $file=$request->file('image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

        //store file
        $file->storeAs('/backend/images/uploads',$fileName);

     }


           Product::create([
            'sub_category_name'=>$request->sub_category_name,
            'product_name'=>$request->prod_name,
            'description'=>$request->description,
            'image'=>$fileName,
            'status'=>$request->status,
            'buying_price'=>$request->buy_price,
            'selling_price'=>$request->sell_price

        ]);
        notify()->success('Product Added Successfully');
         return redirect()->back();
    }

    public function ProductDelete($id){
      Product::find($id)->delete();
      notify()->success('Product deleted successfully');
      return redirect()->back();
    }
    
}
