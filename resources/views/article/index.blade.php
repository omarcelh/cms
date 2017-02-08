@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3>
                        <a href="{{ url('article', $article->slug) }}">{{ $article->title }}</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <img class="img-responsive" src="{{ URL::asset($article->photo_filename) }}">
                    <h4 class="text-center"><strong>{{ $article->excerpt }}</strong></h4>
                    <p>{!! $article->content !!}</p>
                </div>
                <div class="panel-footer">
                    <p><strong>{{ $article->source }}</strong></p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
