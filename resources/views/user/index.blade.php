@extends('layouts.app')

@section('page-title', 'Usuarios')

@section('page-action')
    <a href="{{ route('users.create') }}" class="btn btn-success sm">Adicionar</a>
@endsection

@php
    $breadcrumbs =[
        ['label' => 'Usuarios', 'route' => ''],
    ];
@endphp

@section('content')
 <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <h2>listando meus usuarios</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user ->id}}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="" class="btn btn-primary sm">Editar</a>
                            <a href="" class="btn btn-danger sm">Excluir</a>
                        </td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
 </div>

        
@endsection