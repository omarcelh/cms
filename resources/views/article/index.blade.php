@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default container-fluid">
                <div class="panel-heading">
                    <h3>Articles</h3>({{ $articles->count() }} of {{ $articles->total() }})
                </div>
                <div class="panel-body">
                @foreach ($articles as $article)
                    <div class="row">
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
                            <p><sub>Source: <strong>{{ $article->source }}</strong></sub></p>
                        </div>
                    </div>
                    <hr>
                @endforeach
                {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
