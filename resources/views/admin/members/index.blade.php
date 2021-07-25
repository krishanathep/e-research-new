@extends('layouts.app')

@push('page_css')

@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-black-50">Members</h1>
            </div>
            <div class="col-lg-12">
                <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="btn btn-success mb-3" href="{{ route('admin-members.create') }}"> <i class="fas fa-plus"></i> Create </a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Phone</th>
                    <th width='15%'>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($members as $member)
                    <tr>
                      <td>{{ $member->id }}</td>
                      <td>{{ $member->email }}</td>
                      <td>{{ $member->username }}</td>
                      <td>{{ $member->firstname }}</td>
                      <td>{{ $member->lastname }}</td>
                      <td>{{ $member->position }}</td>
                      <td>{{ $member->phone }}</td>
                      <td>
                        <form action="{{ route('admin-members.destroy',$member->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('admin-members.show',$member->id) }}"> <i class="far fa-eye"></i></a>
                          <a class="btn btn-primary" href="{{ route('admin-members.edit',$member->id) }}"><i class="far fa-edit"></i></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger"> <i class="far fa-trash-alt"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="float-right">
            {{ $members->links() }}
            </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')

@endpush