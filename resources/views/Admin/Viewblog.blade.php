@extends('admin.sidebar')

@section('content')
<div class="container mt-5" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Blog Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Blog Image</th>
                        <th>Content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($blog as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>
                            <img src="{{asset($item->Blogimage)}}" alt="{{$item->title}}" height="100">
                        </td>
                        <td>{{$item->content}}</td>                        
                        <td>
                        <a href="{{route('addBlog.edit',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</a>
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