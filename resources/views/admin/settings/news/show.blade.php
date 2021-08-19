@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View News</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View News</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $news->id }}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{ $news->title }}</td>
                            </tr>
                            <tr>
                                <td>Detail</td>
                                <td>{{ Str::limit($news->detail, 100) }}</td>
                            </tr>
                            </tr>
                                <td>Cratet at</td>
                                <td>{{ $news->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $news->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-setting-news.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
