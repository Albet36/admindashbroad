@extends('master.master')
@section('title','Edit')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Users</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            .
        </div>
    </div>
    <div class="card mb-8">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
           <h2>Edit User</h2>
           <form action="{{url("admin/updateUser",["id"=>$users->id])}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">fullname</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fullname" value="{{$users->fullname}}"  name="fullname">
              <small id="emailHelp" class="form-text text-muted">We'll never share your fullname with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">age</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="age"  value="{{$users->age}}" name="age">
              <small id="emailHelp" class="form-text text-muted">We'll never share your age with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$users->email}}"  name="email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your Email with anyone else.</small>
            </div>
        
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Addres" value="{{$users->address}}"  name="address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your Addres with anyone else.</small>
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone" value="{{$users->phone}}"  name="phone">
                <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
        
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Money</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Money"  value="{{$users->money}}" name="money">
                <small id="emailHelp" class="form-text text-muted">We'll never share your money with anyone else.</small>
        
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Position</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="position"  value="{{$users->position}}" name="position">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection