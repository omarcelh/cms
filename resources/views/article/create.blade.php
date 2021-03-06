@extends('layouts.app')

@section('title', 'Add New Article')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title text-center">
						Add New Article
					</h3>
				</div>
				<div class="box-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/article') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Picture -->
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Photo</label>
                            <input id="photo" type="file" name="photo">
                        </div>

                        <!-- Title -->
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title Name" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Slug -->
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}" placeholder="If left blank, will be generated automatically" autofocus>

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Source -->
                        <div class="form-group{{ $errors->has('source') ? ' has-error' : '' }}">
                            <label for="source" class="col-md-4 control-label">Source</label>

                            <div class="col-md-6">
                                <input id="source" type="text" class="form-control" name="source" value="{{ old('source') }}" placeholder="Source" required autofocus>

                                @if ($errors->has('source'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('source') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Excerpt -->
                        <div class="form-group{{ $errors->has('excerpt') ? ' has-error' : '' }}">
                            <label for="excerpt" class="col-md-4 control-label">Excerpt</label>

                            <div class="col-md-6">
                                <input id="excerpt" type="text" class="form-control" name="excerpt" value="{{ old('excerpt') }}" placeholder="Short description" required autofocus>

                                @if ($errors->has('excerpt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('excerpt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Category Id -->
                        <div class="form-group">
                            <label for="category-id" class="col-md-4 control-label">Category</label>
                            
                            <div class="col-md-6">
                                <select name="category-id" class="form-control" id="category-id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea name="content" id="summernote" class="form-control summernote" required></textarea>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection