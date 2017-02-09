@extends('layouts.app')

@section('title', 'Article')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix" style="vertical-align: middle;">
                    <h3>Articles </h3>({{ $articles->count() }} of {{ $articles->total() }})
                </div>
                <div class="panel-body clearfix">
                @foreach ($articles as $article)
                    <div class="row container-fluid">
                        @if ($article->photo_filename)
                        <div class="col-xs-4 b-image h-150" style="background-image: url({{ URL::asset($article->photo_filename) }});">
                        </div>
                        @else
                        <div class="col-xs-4 b-image h-150" style="background-color: #999">
                        </div>
                        @endif
                        <div class="col-xs-8">
                            <h4><strong>
                                <a href="{{ url('article', $article->slug) }}">{{ $article->title }}</a>
                            </strong></h4>
                            {{ $article->excerpt }}
                            <p><sub>Category: <strong>{{ $article->category->name }}</strong></sub></p>
                            <p><sub>Source: <strong>{{ $article->source }}</strong></sub></p>
                        </div>
                    </div>
                    <br>
                @endforeach
                </div>
                <div class="panel-footer">
                    {{ $articles->links() }}
                    <div class="pull-right">
                        <a href="{{ url('article/create') }}" class="btn btn-primary">Add New Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
