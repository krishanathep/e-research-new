@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Prefix</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Prefix</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $banner->banner_id }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/image/{{ $banner->banner_url }}" width="100px"</td>
                            </tr>
                            <tr>
                                <td>Target</td>
                                <td>{{ $banner->banner_target_url }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($banner->banner_status == 1)
                                        <p class="text-success">Enable</p>
                                    @else
                                        <p class="text-danger">Disable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Create from</td>
                                <td>{{ $banner->user_admin_id }}</td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $banner->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $banner->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-setting-banner.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
