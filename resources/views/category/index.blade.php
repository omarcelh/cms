@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>

                <div class="panel-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Modify</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1 
                                ?>
                                @foreach ($categories as $category)
                                <tr>
                                    <td><?= $i ?></td>
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
                                        <a data-toggle="modal" data-target="#deleteModal">
                                            <span class="glyphicon glyphicon-remove text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                    $i++ 
                                ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <a href="{{ url('category/create') }}" class="pull-right btn btn-primary">
                        Add New Category
                    </a>
                </div>
            </div>
            <!-- Modal -->
            <div id="deleteModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content panel-warning">
                        <div class="modal-header panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Are you sure?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete <b>{{ $category->name}}</b>?</p>
                            <p>Once you delete this category, it cannot be restored.</p>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline" role="form" method="POST" action="{{ url('category', [$category->id]) }}">
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
        </div>
    </div>
</div>
@endsection
