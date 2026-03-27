@extends('layouts.auth');
@section('body-class','login-page')
@section('content')
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <a
            href="{{ route('login') }}"
            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
          >
            <h1 class="mb-0"><b>Admin</b>LTE</h1>
          </a>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="{{ route('login') }}" method="post">

            @csrf

            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginEmail" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" class="form-control" value="" placeholder="" />
                <label for="loginEmail">Email</label>

                @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" />
                <label for="loginPassword">Password</label>
                @error('password')
                    <div class="invali-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              
              <!-- /.col -->
              <div class="col-12">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>

          <p class="mb-1 text-center">
            <a href="{{ route('password.request') }}">I forgot my password</a>
          </p>
          <p class="mb-0 text-center">
            <a href="{{ route('register') }}" class="text-center"> Register a new membership </a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
@endsection