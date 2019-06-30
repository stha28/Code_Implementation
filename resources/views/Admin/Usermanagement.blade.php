@extends('admin.sidebar')

@section('content')
<div class="container mt-5" style="border: 2px solid burlywood;margin: 30px;">
<h2 class="text-center py-2">User Management</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        <th>Status</th>
                        <th>Manage Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->UserType}}</td>
                <td>{{$user->Status}}</td>
                <td>
                <a href="{{ route('manageuser.edit',['id'=>$user->id])}}">Manage Status</a></td>
                <td>
                        <form action="{{ route('manageuser.destroy',['id'=>$user->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}  
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
            </tr>
            @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection