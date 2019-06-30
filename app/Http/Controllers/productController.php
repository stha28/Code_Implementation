<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $product = Product::all();
        $users = User::all();
        return view('admin.product')->with('product',$product)
                                    ->with('user',$users)
                                   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $product->Partname = $request->name; 
        $product->Price = $request->price; 
        $product->Partdetail = $request->description; 
        $product->Quantity = $request->Quantity;  
        $product->Userid = $request->user()->id;        
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/product',$image_new_name); 
        $img = 'Uploads/product/'.$image_new_name;

        $product->Partimage = $img;
        $product->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('showproduct')->with('product',$product)
                                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('user.editproduct')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->Partname = $request->name; 
        $product->Price = $request->price; 
        $product->Partdetail = $request->description; 
        $product->Quantity = $request->Quantity; 
        $product->Categoryid = $request->category; 
        $current = $product->Partimage;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/product',$image_new_name); 
            $img = 'Uploads/product/'.$image_new_name;
            $product->Partimage = $img;

            if($current != $img){
                unlink($current);
            }
        }
        
        $product->save();
        return redirect()->route('addproduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
