<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\User;
use App\booking;
use App\Payment;

class bookController extends Controller
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
        $booking=booking::all();
        return view('user.bookindetail')->with('product',$product)
                                        ->with('booking',$booking)
                                        ->with('user',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buy=new Payment();
        $buy->Paymentway=$request->payment;
        $ree=$request->price;
        $qty=$request->quantity;
        $total=$ree * $qty;
        $buy->Price = $total;
        $buy->Userid=$request->user()->id;
        $buy->Productid=$request->upload;
        $buy->Location=$request->location;
        $buy->Contact=$request->contact;
        $buy->Quantity=$request->quantity;
        $buy->save();
        return redirect()->route('transcation.index');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking= new booking();       
        $booking->Userid = $request->user()->id;        
        $booking->Productid = $request->upload;
        $booking->Price=$request->price;
        $booking->Quantity=$request->quantity;
        $newOrders = $request->quantity;     
        $stock = products::where('id', $booking->Productid)->first()->Quantity;
        if($stock >= $request->quantity){
         products::where('id', $booking->Productid)->decrement('Quantity',$request->quantity);
        }
        $booking->save();
        return redirect()->route('welcome');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::all();
        $booking=booking::findorFail($id);  
        $booking->delete();          
        return view('bookedbuy')->with('user',$user)->with('booking',$booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::all();
        $product=products::findorFail($id);
        return view('book',compact('user','product'));
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
        $product= products::findOrFail($id);
        $product->Status= $request->status;
        $product->save();             
        return redirect()->route('welcome');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = booking::findOrFail($id);
        $newOrders = $booking->Quantity;     
        $stock = products::where('id', $booking->Productid)->first()->Quantity;
        if($stock >= $newOrders){
         products::where('id', $booking->Productid)->increment('Quantity',$newOrders);
        }
        $booking->delete();        
        return redirect()->back();
    }
}
