@extends('admin.sidebar')

@section('content')
<div class="container mb-3"style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">User Status: <b>{{$user->email}}</b></h2>
    <form method="POST" action="{{route('manageuser.update',['id'=>$user->id])}})}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}                          
        <div class="row">
            <div class="col-md-12 form-group">
               <label for="availability"><strong><h4>Status</strong></h4></label><br>
               <select name="Status" class="form-control" required>
                   <option value="">Status</option>
                   <option value="ACtive">Active</option>
                   <option value="Suspended">Suspended</option>
               </select>
            </div>
        </div>   

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="upload" class="btn btn-info offset-10" style="width:125px; font-size:20px; margin-bottom:10px">
                <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Update
                </button>
            </div>
        </div>
    </form>
</div>

@endsection