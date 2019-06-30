<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\renting;
use App\User;
use App\Bikes;

class rentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('rent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rent=new renting();
        $rent->Paymentway=$request->payment;
        $ree=$request->price;
        $qty=$request->quantity;
        $day=$request->RentDays;
        $total=$ree * $qty * $day;
        $rent->Price = $total;
        $rent->Userid=$request->user()->id;
        $rent->Bikeid=$request->upload;
        $rent->PickupDate=$request->PickupDate;
        $rent->DropoffDate=$request->DropoffDate;
        $rent->PickupLocation=$request->Pickuplocation;
        $rent->DropoffLocation=$request->Dropofflocation;
        $rent->Contact=$request->contact;
        $rent->Days=$request->RentDays;
        $rent->Quantity=$request->quantity;
        $newOrders = $request->quantity;     
        $stock = Bikes::where('id', $rent->Bikeid)->first()->Quantity;
        if($stock >= $request->quantity){
         Bikes::where('id', $rent->Bikeid)->decrement('Quantity',$request->quantity);
        }
        $rent->save();
        return redirect()->route('transcation.index');  
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
        $user= User::all();
        $Bike=Bikes::findorFail($id);
        return view('rent',compact('user','Bike'));
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
        $Bike= Bikes::findOrFail($id);
        $qty=$request->quantity;
        $qtybike=$product->Quantity;
        $diff=$qtybike - $qty;
        $Bike->Quantity = $diff;
        $Bike->save();
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
        //
    }
}
