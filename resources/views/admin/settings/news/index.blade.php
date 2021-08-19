@extends('layouts.app') @push('page_css') @endpush @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h1 class="text-black-50">News</h1>
            </div>
            <div class="float-right">
                <a class="btn btn-success mt-2" href="{{ route('admin-setting-news.create') }}"> <i class="fas fa-plus"></i> Create </a>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th width='40%'>Detial</th>
                                        <th>Create at</th>
                                        <th>Update at</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::limit($item->detail, 100) }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('admin-setting-news.destroy', $item->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('admin-setting-news.show', $item->id) }}"><i class="far fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('admin-setting-news.edit', $item->id) }}"><i class="far fa-edit"></i></a>
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {!! $news->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection @push('page_scripts') @endpush