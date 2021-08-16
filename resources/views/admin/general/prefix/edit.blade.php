@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">Update Prefix</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Update Prefix</div>
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

                        <form
                            action="{{ route('admin-general-prefix.update', $prefix->prefix_id) }}"
                            method='POST'>
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Category Name Th : </strong>
                                        <input type="text" name='prefix_name_th' class="form-control"
                                            value="{{ $prefix->prefix_name_th }}"
                                            placeholder='Enter Category Name Th...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Categroy Name Eng : </strong>
                                        <input type="text" name='prefix_name_en' class="form-control"
                                            value="{{ $prefix->prefix_name_en }}"
                                            placeholder='Enter Categroy Name Eng...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 cal-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">Status :</label>
                                        <select class="form-control" id="sel1" name="prefix_status">
                                          <option value="1" {{ $prefix->prefix_status == 1 ? 'selected' : '' }}>Enable</option>
                                          <option value="0" {{ $prefix->prefix_status == 0 ? 'selected' : '' }}>Disable</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class='float-right'>
                                        <a href="{{ route('admin-general-prefix.index') }}"
                                            class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go
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

