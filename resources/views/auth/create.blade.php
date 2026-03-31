@extends('layouts.app')
@section('page-title', 'Cadastrar Usuarios')
@php
  $breadcrumbs = [
    ['label' => 'Cadastrar Usuarios', 'route'=> ''],
];
  
@endphp

@section('content')

<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <form action="" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

                @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <!--<div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>-->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>

@endsection


