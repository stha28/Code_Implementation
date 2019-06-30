@extends('admin.sidebar')

@section('content')
<div class="container mb-3" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">Add new Parts</h2>
    <form method="POST" action="{{route('addparts.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="name">Part Name</label> 
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="image">Part Image</label>
                <input type="file" name="image" class="form-control-file" accept="image/*" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="price">Price</label> 
                <input class="form-control" required="required" name="price" type="number">
            </div>
            <div class="col-md-6 form-group">
               <label for="Quantity">Quantity</label><br>
               <input class="form-control" type="text" name="Quantity" required>
            </div>
        </div>
         
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="desc">Description</label> 
                <textarea name="description" rows="5" class="form-control"></textarea>
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
</div>
@endsection