@extends('layouts.app')

@section('content')
<h2 class="text-center py-2">Transaction Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Part Name</th>                        
                        <th>Total Price</th>
                        <th>Payment Way</th>
                        <th>Quantity</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transcation as $transcation)
                @if(Auth::user()->id == $transcation->Userid)
            <tr>
            <?php $product = App\products::findorFail($transcation->Productid)?> 
                        <td>{{$product->Partname}}</td>
                <td>{{$transcation->Price}}</td>
                <td>{{$transcation->Paymentway}}</td>
                <td>{{$transcation->Quantity}}</td>
                <td><a href="" class="btn btn-primary">Print</a></td>
                   </tr>
                   @endif                      
                    @endforeach   
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection