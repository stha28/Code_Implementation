@extends('layouts.app')

@section('content')
<section id="slider-area">
    <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="{{route('rent.store',Auth::user()->id)}}" method="POST" >
                                @csrf
                                <!--== Pick Up Location ==-->
                                <div class="col-md-12">
									<div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="id" class="form-control" disabled value="{{$Bike->Bikename}}">
                              </div>
                              <div class="form-group">
                                    <label for="price">Price</label>
									<input class="form-control" required="required" name="price" type="number" id="price" value="{{$Bike->Price}}" readonly>
                              </div>
                              <div class="form-group">
                                    <label for="pnname">Available Quantity</label>
                                    <input type="text" name="id" class="form-control" disabled value="{{$Bike->Quantity}}" readonly>
                              </div>
                              <div class="pickup-location book-item">
                                    <h4>Quantity:</h4>
                                    <input class="form-control" required="required" name="quantity" onKeyUp="multiply()" id="quantity" type="number" min="1" max="{{$Bike->Quantity}}">
                                </div>                            
                                <div class="pickup-location book-item">
                                    <h4>PICK-UP LOCATION:</h4>
                                    <select class="custom-select" name="Pickuplocation">
                                      <option selected>Select</option>
                                      <option value="1">Baneshwor</option>
                                      <option value="2">Patan</option>
                                      <option value="3">Koteshwor</option>
                                      <option value="3">Bouddha</option>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4>DROP-OFF LOCATION:</h4>
                                    <select class="custom-select" name="Dropofflocation">
                                      <option selected>Select</option>
                                      <option value="1">Baneshwor</option>
                                      <option value="2">Patan</option>
                                      <option value="3">Koteshwor</option>
                                      <option value="3">Bouddha</option>
                                    </select>
                                </div>

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4>DATE:</h4>
                                    <input id="startDate" type="date" name="PickupDate" placeholder="Pick Up Date" />
                                </div>

                                <div class="pick-up-date book-item">
                                    <h4>DATE:</h4>
                                    <input id="startDate" type="date" name="DropoffDate" placeholder="Pick Up Date" />
                                </div>

                                   <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>No OF DAYS:</h4>
                                    <select class="custom-select" name="days">
                                      <option selected>Select</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="1">5</option>
                                      <option value="2">6</option>
                                      <option value="3">7</option>
                                    </select>
                                </div>
                                <div class="pickup-location book-item">
                                    <h4>Contact Information:</h4>
                                    <input class="form-control" required="required" name="contact" type="text" >
                                </div>  
                                <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Payment way</label>
                                        <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="payment" id="people" class="form-control" required="required">
				                      	<option value="" >Select Payment way</option>
				                        <option value="Esewa">Esewa</option>
				                        <option value="Paypal">Paypal</option>
			                        </select>
                                 </div>
                                </div>
			               </div>            
                                <!--== Car Choose ==-->
                                <div class="book-button text-center">
                                    <button class="book-now-btn" name="upload" value="{{$Bike->id}}">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
    </div> 
</section>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>