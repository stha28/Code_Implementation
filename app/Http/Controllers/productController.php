<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\products;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $product = products::all();
        $users = User::all();
        return view('admin.viewparts')->with('product',$product)
                                    ->with('user',$users);
                                   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addparts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new products();
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('showproduct')->with('product',$product);
                                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::findOrFail($id);
        return view('admin.editParts')->with('product',$product);
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
        $product = products::findOrFail($id);
        $product->Partname = $request->name; 
        $product->Price = $request->price; 
        $product->Partdetail = $request->description; 
        $product->Quantity = $request->Quantity; 
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
        return redirect()->route('addparts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
