<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class productController extends Controller
{
    public function index(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='Admin')
            {
                $products = productModel::latest()->paginate(4);
                return view('index',['products'=>$products]);
            }
            else
            {
                 $products = productModel::latest()->paginate(4);
                 return view('user',['products'=>$products]);
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function products(){
        $products = productModel::all();
        return view('products',['products'=>$products]);
    }

    public function details($id){
        $product = productModel::where('id',$id)->first();
        return view('details',['product'=>$product]);
    }

    public function create(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='Admin')
            {
                return view('create');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
        
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'model'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'des'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('picture'),$imageName);

        $productModels = new productModel;
        $productModels->product_name = $request->name;
        $productModels->product_model = $request->model;
        $productModels->product_price = $request->price;
        $productModels->product_quantity = $request->quantity;
        $productModels->product_des= $request->des;
        $productModels->product_image =$imageName;
        $productModels->save();
        return redirect()->route('home');
        // return back()->withSuccess('Product Detaills Inserted Successfully......');
    }

    public function update($id){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='Admin')
            {
                $product = productModel::where('id',$id)->first();
                return view('update',['product'=>$product]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
        
    }

    public function updated(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'model'=>'required',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
            'des'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $productModels = productModel::where('id',$id)->first();

        if(isset($request->image)){
            $imageName=time().".".$request->image->extension();
            $request->image->move(public_path('picture'),$imageName);
            $productModels->product_image= $imageName;
        }

        $productModels->product_name = $request->name;
        $productModels->product_model = $request->model;
        $productModels->product_price = $request->price;
        $productModels->product_quantity = $request->quantity;
        $productModels->product_des= $request->des;
        $productModels->save();
        return redirect()->route('home');
    }

    public function deleted($id){
        $product = productModel::where('id',$id)->first();
        $product->delete();
        return redirect()->route('home');
    }
}
