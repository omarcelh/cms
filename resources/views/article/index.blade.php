@extends('layouts.app')

@section('title', 'Articles')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Articles</h3>({{ $articles->count() }} of {{ $articles->total() }})
                </div>

                <div class="panel-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Modify</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->category->name }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>{{ $article->updated_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('article', [$article->id]) . '/edit' }}">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="delete-article-button" data-toggle="modal" role="button" data-target="#modal-delete" data-url="{{ url('/article', $article->id) }}">
                                            <span class="glyphicon glyphicon-remove text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    {{ $articles->links() }}
                    <a href="{{ url('article/create') }}" class="pull-right btn btn-primary">
                        Add New Article
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal-delete" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content panel-warning">
                        <div class="modal-header panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Are you sure?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this?</p>
                            <p>Once you delete this article, it cannot be restored.</p>
                        </div>
                        <div class="modal-footer">
                            <form id="delete-article-form" class="form-inline" role="form" method="POST">
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Close Modal -->
            <!-- Script for delete modal -->
            <script type="text/javascript">
                $('.delete-article-button').click(function () {
                    $('#delete-article-form').attr('action', $(this).data('url'));
                });
            </script>
        </div>
    </div>
</div>
@endsection
