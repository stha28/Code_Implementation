@extends('admin.sidebar')

@section('content')
<div class="container mt-5" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Parts Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Part Name</th>
                        <th>Part Image</th>
                        <th>Price</th>
                        <th>Detail</th> 
                        <th>Quantity</th>  
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($product as $item)
                
                    <tr>
                        <td>{{$item->Partname}}</td>
                        <td>
                            <img src="{{asset($item->Partimage)}}" alt="{{$item->Partname}}" height="100">
                        </td>
                        <td>{{$item->Price}}</td>
                        <td>{{$item->Partdetail}}</td>  
                        <td>{{$item->Quantity}}</td>  
                        <td>
                        <a href="{{route('addparts.edit',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</a>
                        </td>
                        <td>
                        <form action="{{ route('addparts.destroy',['id'=>$item->id]) }}" method="POST">
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