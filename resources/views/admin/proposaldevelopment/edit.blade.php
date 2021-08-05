@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">Create Proposal Development</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Create Proposal Development</div>
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

                        <form action="{{ route('admin-proposaldevelopment.update', $proposaldevelopment->proposal_dev_id) }}" method='POST'>
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Approved : </strong>
                                        <input type="text" name='concept_approve_id' class="form-control" value="{{ $proposaldevelopment->shopping_id }}" 
                                            placeholder='Enter sl id...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Shoppinglist : </strong>
                                        <input type="text" name='shopping_id' class="form-control" value="{{ $proposaldevelopment->concept_approve_id }}" 
                                            placeholder='Enter sl id...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name : </strong>
                                        <input type="text" name='proposal_dev_name' class="form-control" value="{{ $proposaldevelopment->proposal_dev_name }}"
                                            placeholder='Enter name...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Detail : </strong>
                                        <input type="text" name='proposal_dev_details' class="form-control" value="{{ $proposaldevelopment->proposal_dev_details }}"
                                            placeholder='Enter detail...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Re type : </strong>
                                        <input type="text" name='research_type_id' class="form-control" value="{{ $proposaldevelopment->research_type_id }}"
                                            placeholder='Enter type...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Type : </strong>
                                        <input type="text" name='proposal_dev_type' class="form-control" value="{{ $proposaldevelopment->proposal_dev_type }}"
                                            placeholder='Enter type...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Status : </strong>
                                        <input type="text" name='proposal_dev_status' class="form-control" value="{{ $proposaldevelopment->proposal_dev_status }}"
                                            placeholder='Enter status...'>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class='float-right'>
                                        <a href="{{ route('admin-proposaldevelopment.index') }}"
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
