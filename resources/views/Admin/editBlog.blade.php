@extends('admin.sidebar')

@section('content')
<div class="container mb-3" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Add new Blog</h2>
    <form method="POST" action="{{route('addBlog.update',['id'=>$blog->id])}})}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
        
            <div class="col-md-6 form-group">
                <label for="name">Blog Title</label> 
                <input type="text" name="name" class="form-control" required value="{{$blog->title}}">
            </div>
            <div class="col-md-6 form-group">
                <label for="image">Blog Image</label>
                <input type="file" name="image" class="form-control-file" accept="image/*" >
            </div>
            <div class="col-md-6">
                <img src="{{asset($blog->Blogimage)}}" alt="{{$blog->title}}" width="50%">
            </div>
        </div>        
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="desc">Description</label> 
                <textarea name="description" rows="5" class="form-control">"{{$blog->content}}"</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="upload" class="btn btn-info offset-10" style="width:124px; font-size:20px; margin-bottom:10px">
                <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Update
                </button>
            </div>
        </div>
    </form>
</div>
@endsection