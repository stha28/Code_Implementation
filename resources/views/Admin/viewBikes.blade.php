@extends('admin.sidebar')

@section('content')
<div class="container mt-5" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Product Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Bike Name</th>
                        <th>Bike Image</th>
                        <th>Price</th>
                        <th>Detail</th> 
                        <th>Quantity</th> 
                        <th>Category</th>                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Bike as $item)
                
                    <tr>
                        <td>{{$item->Bikename}}</td>
                        <td>
                            <img src="{{asset($item->Bikeimage)}}" alt="{{$item->Bikename}}" height="100">
                        </td>
                        <td>{{$item->Price}}</td>
                        <td>{{$item->Bikedetail}}</td>
                        <td>{{$item->Quantity}}</td>  
                        <?php $category = App\categories::findorFail($item->Categoryid)?> 
                        <td>{{$category->Categoryname}}</td>  
                                              
                        <td>
                        <a href="{{route('addbikes.edit',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</a>
                        <!-- <button type="submit" href="{{route('addbikes.edit',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</button> -->
                        </td>
                        <td>
                        <form action="{{ route('addbikes.destroy',['id'=>$item->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            
                        </td>
                    </tr>                        
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
</div>
@endsection