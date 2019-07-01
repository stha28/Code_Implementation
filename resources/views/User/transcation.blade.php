@extends('User.Sidebar')

@section('content')
<div class="container mb-3" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Transaction Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Bike Name</th>                        
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
            <?php $Bike = App\Bikes::findorFail($transcation->Bikeid)?> 
                        <td>{{$Bike->Bikename}}</td>
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
</div>
@endsection