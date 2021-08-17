
@extends('layouts.app')

@push('page_css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <h1 class="text-black-50">Banner</h1>
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
                                            <th>Body</th>
                                            <th>Create at</th>
                                            <th>Update at</th>
                                            <th width='15%'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            <tr>
                                                <td>1</td>
                                                <td align="center">
                                                    <img src="https://images.pexels.com/photos/3183153/pexels-photo-3183153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                                                    class="img-thumbnail" width="120">
                                                </td>
                                                <td>my banner 1</td>
                                                <td>2021-08-17 14:19:30</td>
                                                <td>2021-08-17 14:19:30</td>
                                                <td>
                                                    <form
                                                        action=""
                                                        method="POST">
                                                        <a class="btn btn-info"
                                                            href="">
                                                            <i class="far fa-eye"></i></a>
                                                        <a class="btn btn-primary"
                                                            href=""><i
                                                                class="far fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete?')"> <i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')

@endpush
