@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">Edit Member</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Edit Member</div>
                    <div class="card-body container">

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

                        <form action="{{ route('admin-members.update', $members->user_id) }}" method='POST'>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="sel1">Prefix</label>
                                <select class="form-control" id="sel1" name="User_prefix_id">
                                    @foreach ($prefix as $item)
                                        <option value="{{ $item->prefix_id  }}"
                                            {{ $item->prefix_id == $members->User_prefix_id ? 'selected' : '' }}>
                                            {{ $item->prefix_name_th }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">First name</label>
                                <input type="text" name="User_FName" class='form-control'
                                    placeholder='Enter your first name' value="{{ $members->User_FName }}">
                            </div>
                            <div class="form-group">
                                <label for="">Last name</label>
                                <input type="text" name="User_LName" class='form-control' placeholder='Enter your last name'
                                    value="{{ $members->User_LName }}">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Department </label>
                                <select class="form-control" id="sel1" name="User_DepartmentID">
                                    @foreach ($department as $item)
                                        <option value="{{ $item->department_id }}"
                                            {{ $item->department_id == $members->User_DepartmentID ? 'selected' : '' }}>
                                            {{ $item->department_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Position </label>
                                <select class="form-control" id="sel1" name="User_Position_id">
                                    @foreach ($position as $item)
                                        <option value="{{ $item->position_id }}"
                                            {{ $item->position_id == $members->User_Position_id ? 'selected' : '' }}>
                                            {{ $item->position_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="User_Email" class='form-control' placeholder='Enter your email'
                                    value="{{ $members->User_Email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="text" name="User_Mobile" class='form-control' placeholder='Enter your mobile'
                                    value="{{ $members->User_Mobile }}">
                            </div>
                            <div class="form-group float-right">
                                <a href="{{ route('admin-members.index') }}" class='btn btn-secondary'><i
                                        class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                                <button type='submit' class='btn btn-primary'> <i class="far fa-check-circle"></i>
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
