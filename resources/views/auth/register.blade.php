@extends('layouts.auth')
@section('body-class','register-page')
@section('content')
    <div class="register-box">
      <!-- /.register-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header">
          <a
            href="{{ route('login') }}"
            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
          >
            <h1 class="mb-0"><b>Admin</b>LTE</h1>
          </a>
        </div>
        <div class="card-body register-card-body">
          <p class="register-box-msg">Register a new membership</p>

          <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            
            @csrf
            
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerFullName" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value=" {{ old('name') }}"placeholder="" />
                <label for="registerFullName">Full Name</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="input-group-text">
                <span class="bi bi-person"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerEmail" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" class="form-control" placeholder="" />
                <label for="registerEmail">Email</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerPassword" type="password" name="password" class="form-control @error('password') is-invalid @enderror" class="form-control" placeholder="" />
                <label for="registerPassword">Password</label>
                @error('password')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
             <div class="input-group mb-1">
              <div class="form-floating">
                <input id="registerPassword" type="password" name="password_confirmation" class="form-control" placeholder="" />
                <label for="registerPassword">Password confirmation</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-12 d-inline-flex align-items-center">
               
              <!-- /.col -->
              <div class="col-12 mt-2">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>

          
          <p class="mb-0 mt-2 text-center">
            <a href="{{ route('login') }}" class="link-primary text-center"> I already have a membership </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>
    <!-- /.register-box -->
@endsection