@extends('layouts.master')
@include('partials.header')

@section('title')
    LSE | Home Page
@endsection

@section('content')
    <header class="intro-header" style="background-image: url('http://technext.github.io/Evento/images/demo/bg-slide-01.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Lightning Speed Events</h1>
                        <hr class="small">
                        <span class="subheading">Some text</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            <h2 style="text-align: center">Up coming Events</h2>
            <br>
            @include('partials.event')
            <hr>
        </div>
        <h2 style="text-align: center">Find Events by Categories</h2>
        <br>
        @include("partials.category")
    </div>
@endsection
