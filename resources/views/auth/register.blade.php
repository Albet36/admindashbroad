@extends('master.login')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <form action="{{route("auth.regis")}}" method="post">
                                    @csrf       
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="images"/>
                                        <label for="inputEmail">images</label>
                                        <span style="color: red">@error('images'){{$message}}@enderror</span>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="username"/>
                                        <label for="inputEmail">Username</label>
                                        <span style="color: red">@error('username'){{$message}}@enderror</span>

                                    </div>
                                  
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password"/>
                                                <label for="inputPassword">Password</label>
                                                <span style="color: red">@error('password'){{$message}}@enderror</span>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="repassword"/>
                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                                <span style="color: red">@error('repassword'){{$message}}@enderror</span>

                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
                                        <label for="inputEmail">Email address</label>
                                        <span style="color: red">@error('email'){{$message}}@enderror</span>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="position"/>
                                        <label for="inputEmail">Position</label>
                                        <span style="color: red">@error('position'){{$message}}@enderror</span>

                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Create Account</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{url("/login")}}">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</div>
@endsection