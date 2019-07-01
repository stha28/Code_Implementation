@extends('User.Sidebar')

@section('content')
<div class="container mb-3" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Booking Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th> 
                        <th>Booking Date</th>
                        <th>Quantity</th>
                        <th>Buy</th>
                        <th>Delete</th>                                                                     
                    </tr>
                </thead>
                <tbody>
                @foreach ($booking as $transaction)
                @if(Auth::user()->id == $transaction->Userid)
            <tr>
            <?php $product = App\products::findorFail($transaction->Productid)?> 
                        <td>{{$product->Productname}}</td>  
                        <td>{{$product->created_at}}</td>
                        <td>{{$transaction->Quantity}}</td>  
                        <td>                 
                        <a class="btn btn-primary" href="{{route('book.show',['id'=>$transaction->id],['pid'=>$product->id])}}">Buy</a>
                        </td>           
                        <td>
                        <form action="{{ route('book.destroy',['id'=>$transaction->id]) }}" method="POST" >
                                @csrf
                                {{ method_field('DELETE') }}                                 
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                   </tr>
                   @endif                      
                    @endforeach   
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection