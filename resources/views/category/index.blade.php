@extends('layouts.app')

@section('title', 'Categories')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Categories</h3>({{ $categories->count() }} of {{ $categories->total() }})
                </div>

                <div class="panel-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Modify</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('category', [$category->id]) . '/edit' }}">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="delete-category-button" data-toggle="modal" role="button" data-target="#modal-delete" data-url="{{ url('/category', $category->id) }}">
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
                    {{ $categories->links() }}
                    <a href="{{ url('category/create') }}" class="pull-right btn btn-primary">
                        Add New Category
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
                            <p>Once you delete this category, it cannot be restored.</p>
                        </div>
                        <div class="modal-footer">
                            <form id="delete-category-form" class="form-inline" role="form" method="POST" action="">
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
                $('.delete-category-button').click(function () {
                    $('#delete-category-form').attr('action', $(this).data('url'));
                });
            </script>
        </div>
    </div>
</div>
@endsection
