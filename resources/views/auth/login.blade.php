@extends('templates.auth_header')
@extends('templates.auth_navbar')
@section('content')
<div class="content content-fixed content-auth">
      <div class="container mt-5">
        <div class="row">
          <div class="border border-dark rounded col-sm-6 mx-auto my-5">
            <div class="wd-100p mb-3 mt-3">
              <h3 class="tx-color-01 mg-b-15 text-center">Login Form</h3>
              <div class="alert alert-danger text-center mx-4" role="alert">
                Pesan Error : Incorrect Email or Password
              </div>
              <div class="form-group mx-4">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Enter your Email" aria-label="Username" aria-describedby="basic-addon1" value="">
              </div>
            </div>
              <div class="form-group mx-4">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 480 512" class="svg-inline--fa fa-star-of-life fa-w-15 fa-2x"><path fill="currentColor" d="M471.99 334.43L336.06 256l135.93-78.43c7.66-4.42 10.28-14.2 5.86-21.86l-32.02-55.43c-4.42-7.65-14.21-10.28-21.87-5.86l-135.93 78.43V16c0-8.84-7.17-16-16.01-16h-64.04c-8.84 0-16.01 7.16-16.01 16v156.86L56.04 94.43c-7.66-4.42-17.45-1.79-21.87 5.86L2.15 155.71c-4.42 7.65-1.8 17.44 5.86 21.86L143.94 256 8.01 334.43c-7.66 4.42-10.28 14.21-5.86 21.86l32.02 55.43c4.42 7.65 14.21 10.27 21.87 5.86l135.93-78.43V496c0 8.84 7.17 16 16.01 16h64.04c8.84 0 16.01-7.16 16.01-16V339.14l135.93 78.43c7.66 4.42 17.45 1.8 21.87-5.86l32.02-55.43c4.42-7.65 1.8-17.43-5.86-21.85z" class=""></path></svg>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password">
              </div>
            </div>
              <div class="form-group mx-4 mt-2">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember Me</label>
                </div>
                <a href="{{url('profil')}} " class="btn btn-block btn-success font-weight-bold">Log In</a>
              </div>
              
          </div><!-- sign-wrapper -->
        </div>
      </div>
      </div><!-- container -->
    </div><!-- content -->
    @endsection