@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">Create Banner</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Create Banner</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin-setting-banner.update', $banner->banner_id) }}" method='POST' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Target : </strong>
                                    <input type="text" name='banner_target_url' class="form-control" value="{{ $banner->banner_target_url }}"
                                        placeholder='Enter Target...'>
                                </div>
                            </div>
                            <div class="col-xs-12 cal-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="sel1">Status :</label>
                                    <select class="form-control" id="sel1" name="banner_status">
                                      <option value="1" {{ $banner->banner_status == 1 ? 'selected' : '' }}>Enable</option>
                                      <option value="0" {{ $banner->banner_status == 0 ? 'selected' : '' }}>Disable</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name='user_admin_id' class="form-control" value="{{ $banner->user_admin_id }}"
                                        placeholder='Enter Admin...' value="{{ Auth::user()->admin_name }}" hidden>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p><strong>Image : </strong></p>
                                    <p><input type="file" name='banner_url'></p>
                                    <img src="/image/{{ $banner->banner_url }}" width="200px">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class='float-right'>
                                    <a href="{{ route('admin-setting-banner.index') }}" class='btn btn-secondary'><i
                                            class="far fa-arrow-alt-circle-left"></i> Go
                                        Back</a>
                                    <button type="submit" class="btn btn-primary"> <i class="far fa-check-circle"></i>
                                        Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
