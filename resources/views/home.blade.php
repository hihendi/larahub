<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @stack('style')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Answer</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @forelse ($questions as $question)
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-text text-center"> {{$question->title}} </h4>
                                <p class="card-text">{{$question->content}}</p>
                            </div>
                            @forelse ($answers as $answer)
                            <div class="card-body">
                                <p class="card-text">
                                    {{$answer->content}}
                                </p>
                            </div>
                            <hr>
                            @empty
                            <div class="card-body text-center">
                                <p class="card-text">
                                    Not user answer question
                                </p>
                            </div>
                            @endforelse
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addModal">Answer the Question</button>
                            </div>
                        </div>
                        @empty
                        <div class="card shadow text-center">
                            <div class="card-body">
                                <p class="card-text">
                                    Not question
                                </p>
                            </div>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
>>>>>>> parent of 21d608e... commit crud_laravel_1
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
