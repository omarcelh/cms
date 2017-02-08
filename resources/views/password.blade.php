@extends('layouts.app')

@section('title', 'Change Password')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password') }}">
                        <!-- {{ csrf_field() }} -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password-confirmation') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password Confirmation</label>

                            <div class="col-md-6">
                                <input id="new-password-confirmation" type="password" class="form-control" name="new-password-confirmation" required>

                                @if ($errors->has('new-password-confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password-confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
