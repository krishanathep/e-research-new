@extends('layouts.app') @push('page_css') @endpush @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h1 class="text-black-50">Banners</h1>
            </div>
            <div class="float-right">
                <a class="btn btn-success mt-2" href="{{ route('admin-setting-banner.create') }}"> <i class="fas fa-plus"></i> Create </a>
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
                                        <th>Image</th>
                                        <th>Target</th>
                                        <th>Status</th>
                                        <th>Create from</th>
                                        <th>Create at</th>
                                        <th>Update at</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $item)
                                    <tr>
                                        <td>{{ $item->banner_id }}</td>
                                        <td><img src="/image/{{ $item->banner_url }}" width="100px"></td>
                                        <td>{{ $item->banner_target_url }}</td>
                                        <td>
                                        @if ($item->banner_status == 1)
                                            <p class="text-success">Enable</p>
                                        @else
                                            <p class="text-danger">Disable</p>
                                        @endif
                                        </td>
                                        <td>{{ $item->user_admin_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('admin-setting-banner.destroy', $item->banner_id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('admin-setting-banner.show', $item->banner_id) }}"><i class="far fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('admin-setting-banner.edit', $item->banner_id) }}"><i class="far fa-edit"></i></a>
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
                                {!! $banner->links() !!}
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