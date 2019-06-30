@extends('admin.sidebar')

@section('content')

<div class="container"style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Add new Category</h2>
    <form action="{{route('addCategory.store')}}" method="POST" enctype="multipart/form-data">
    
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Category Name</label> 
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="upload" class="btn btn-info offset-10" style="width:124px; font-size:20px; margin-bottom:10px">
                <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Submit
                </button>
            </div>
        </div>
    </form>
    <div class="container mt-5">
    <h2 class="text-center pt-3 py-2">View All Product Category</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($category as $item)
            <tr>
                <td>{{$item->Categoryname}}</td>
                <td>Delete</td>
            </tr>
            @endforeach      
        </tbody>
    </table>
</div>    
</div>


@endsection