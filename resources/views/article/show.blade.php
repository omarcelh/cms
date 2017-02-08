@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default container-fluid">
                <div class="panel-heading">
                    <h3>{{ $article->title }}</h3>
                </div>
                <div class="panel-body container-fluid">
                    @if ($article->photo_filename)
                    <div class="row">
                        <img class="img-responsive" src="{{ URL::asset($article->photo_filename)}}">
                    </div>
                    @endif
                    <div class="row">
                        <h4><strong>{{ $article->excerpt }}</strong></h4>
                        <p>{{ $article->content }}</p>
                        <p><sub>Source: <strong>{{ $article->source }}</strong></sub></p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
