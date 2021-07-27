@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">Edit Member</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Edit Member</div>
                    <div class="card-body container">
                        <form action="">
                            <div class="form-group">
                                <label for="">First name</label>
                                <input type="text" class='form-control'placeholder='Enter your first name'>
                            </div>
                            <div class="form-group">
                                <label for="">Last name</label>
                                <input type="text" class='form-control'placeholder='Enter your last name'>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class='form-control'placeholder='Enter your email'>
                            </div>
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" class='form-control'placeholder='Enter your position'>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class='form-control'placeholder='Enter your phone'>
                            </div>
                            <div class="form-group">
                                <label for="">Create at</label>
                                <input type="text" class='form-control'placeholder='Enter your create at'>
                            </div>
                            <div class="form-group float-right">
                                <a href="{{ route('admin-members.index') }}" class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                                <button type='submit' class='btn btn-primary'> <i class="far fa-check-circle"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection