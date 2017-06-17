@extends('layouts.master')
@include('partials.header')

@section('title')
    Event Detail | LSE
@endsection

@section('content')
    <div class="container" id="body-detail">
        <div class="row">

            <div class="col-xs-3 sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <img class="img-thumbnail" style="width: 100%; height: 200px; margin-top: 25px" src="http://www.skiheavenly.com/~/media/heavenly/images/732x260%20header%20images/events-heavenly-header.ashx">
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
            </div><!-- /.event-sidebar -->

            <div class="col-sm-8">
                <h2 class="event-title">Event Title</h2>
                <p class="event-meta">January 1, 2014 at Location</p>
            </div><!-- /.event-main -->

        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection