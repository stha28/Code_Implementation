@extends('layouts.app')

@section('content')
<section id="slider-area">
    <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
					<h2>Billing Details</h2>
						<form method="POST" class="colorlib-form" action="{{route('book.store',Auth::user()->id)}}" enctype="multipart/form-data">
                            @csrf
                            
		              	<div class="row">
			               
								<div class="col-md-12">
									<div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="id" class="form-control" disabled value="{{$product->Partname}}">
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
                                    <label for="pnname">User Email</label>
                                    <input type="text" name="id" class="form-control" disabled value="{{Auth::user()->email}}">
			                  </div>
			                 
                           </div>
                           <div class="col-md-12">
									<div class="form-group">
                                    <label for="price">Price</label>
									<input class="form-control" required="required" name="price" type="number" id="price" value="{{$product->Price}}" readonly>
			                  </div>
							  </div>
							  <div class="col-md-12">
									<div class="form-group">
                                    <label for="pnname">Available Quantity</label>
                                    <input type="text" name="id" class="form-control" disabled value="{{$product->Quantity}}" readonly>
			                  </div>
			                 
                           </div>
							  <div class="col-md-12">
									<div class="form-group">
                                    <label for="price">Quantity</label>
									<input class="form-control" required="required" name="quantity" onKeyUp="multiply()" id="quantity" type="number" min="1" max="{{$product->Quantity}}" onKeyDown="return false">
			                  </div>
			               </div>   			   
						<div class="row">
							<div class="col-md-12">
								<p><button type="submit" name="upload" value="{{$product->id}}" class="btn btn-primary">Buy</button></p>
							</div>
                        </div>
						</form>						
                        
					</div>
				</div>
			</div>
		</div>
    </div>
</div>