<?php

namespace App\Http\Controllers;
use App\Bikes;
use Illuminate\Http\Request;

use App\categories;

class addBikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bike = Bikes::latest()->get();
        return view('admin.viewBikes', compact('Bike'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=categories::all();
        return view('admin.addBikes',compact('category'));       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Bike = new Bikes();
        $Bike->Bikename = $request->name; 
        $Bike->Price = $request->price; 
        $Bike->Bikedetail = $request->description; 
        $Bike->Quantity = $request->Quantity; 
        $Bike->Categoryid = $request->category;                 
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/bikes',$image_new_name); 
        $img = 'Uploads/bikes/'.$image_new_name;

        $Bike->Bikeimage = $img;
        $Bike->save();
        return redirect()->route('addbikes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Bike = Bikes::findOrFail($id);
        $category = Categories::all();
        
        return view('admin.editBikes')->with('category',$category) ->with('Bike',$Bike);
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
        $Bike = Bikes::findorFail($id);
        $Bike->Bikename = $request->name; 
        $Bike->Price = $request->price; 
        $Bike->Bikedetail = $request->description; 
        $Bike->Quantity = $request->Quantity;  
        
        $current = $Bike->Bikeimage;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/bikes',$image_new_name); 
            $img = 'Uploads/bikes/'.$image_new_name;
            $Bike->Bikeimage = $img;

            if($current != $img){
                unlink($current);
            }
        }
        
        $Bike->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bike = Bikes::findOrFail($id);
        $Bike->delete();

        unlink($Bike->Bikeimage);
        // Session::flash('message', 'Successfully deleted the nerd!');
        return redirect()->back();
    }
}
