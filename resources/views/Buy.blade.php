@extends('layouts.app')

@section('content')
<div class="row" style="margin-left:35%;">
					<div class="col-md-7">
					<h2>Billing Details</h2>
						<form method="POST" class="colorlib-form" action="{{route('buy.store',Auth::user()->id)}}" enctype="multipart/form-data">
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
						   <div class="col-md-12">
									<div class="form-group">
                                    <label for="price">Total</label>
									<input class="form-control" required="required" name="total" type="number" id="total" readonly>
			                  </div>
							  </div>     
						   <div class="col-md-12">
									<div class="form-group">
                                    <label for="price">Delivery Location</label>
									<input class="form-control" required="required" name="location" type="text">
			                  </div>	                 
			               </div>
						   <div class="col-md-12">
									<div class="form-group">
                                    <label for="price">Contact Information</label>
									<input class="form-control" required="required" name="contact" type="text">
			                  </div>	                 
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

<script type="text/javascript">
function multiply()
{
    var a = Number(document.getElementById('quantity').value);
    var b = Number(document.getElementById('price').value);
    var c = a * b;

    document.getElementById('total').value = c;
}
</script>