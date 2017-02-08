@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="container">
    @if (session('status'))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Content Management System</div>
                <div class="panel-body">
                    <div><a href="{{ url('/article') }}">Article</a></div>
                    <div><a href="{{ url('/category') }}">Category</a></div>
                    <div><a href="{{ url('/password') }}">Password</a></div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Preview</div>
                <div class="panel-body">
                    <div><a href="{{ url('/') }}">Article</a></div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
