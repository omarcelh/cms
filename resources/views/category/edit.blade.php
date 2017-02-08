@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title text-center">
                        Edit Category
                    </h3>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('category', [$category->id]) }}">
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
                            <label for="cname" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="cname" type="text" class="form-control" name="cname" value="{{ $category->name }}" placeholder="Category Name" required autofocus>

                                @if ($errors->has('cname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ $category->slug }}" placeholder="If left blank, will be generated automatically" autofocus>

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection