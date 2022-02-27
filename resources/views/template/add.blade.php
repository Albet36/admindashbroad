@extends('master.master')
@section('title','Add-User')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url("")}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Users</li>
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
           <h2>Add User</h2>
           <form action="{{url("admin/saveUser")}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">fullname</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fullname" name="fullname">
              <small id="emailHelp" class="form-text text-muted">We'll never share your fullname with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">age</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="age" name="age">
              <small id="emailHelp" class="form-text text-muted">We'll never share your age with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your Email with anyone else.</small>
            </div>
           
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Addres" name="address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your Addres with anyone else.</small>
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone" name="phone">
                <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
        
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Money</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Money" name="money">
                <small id="emailHelp" class="form-text text-muted">We'll never share your money with anyone else.</small>
        
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Position</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="position" name="position">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection