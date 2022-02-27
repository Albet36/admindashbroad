@extends('master.master')
@section('title','List User')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">List User </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url("")}}">Dashboard</a></li>
        <li class="breadcrumb-item active">List User</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header" style="text-align:center"> 
         <form action="{{url("admin/search")}}" method="POST">
            @csrf
            <input type="text" class="form-control" placeholder="Search" style="width: 30%; display:inline-block" name="search">
            <button class="btn btn-primary" type="submit">Search</button>
         </form>
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Money</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1 ?>
                    @foreach ($users as $item)  
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->position}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->money}}</td>
                        <td><a href="{{url("admin/edit",["id"=>$item->id])}}" class="btn btn-warning">Edit</a>
                            <a href="{{url("admin/deleteUser",["id"=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection