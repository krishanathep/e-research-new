@extends('layouts.app')

@push('page_css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-black-50">Proposal Development</h1>
            </div>
            <div class="col-lg-12">
                <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="btn btn-success mb-3" href="{{ route('admin-proposaldevelopment.create') }}"> <i class="fas fa-plus"></i> Create </a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Project Name</th>
                    <th>Research</th>
                    <th>Type</th>
                    <th>Head</th>
                    <th>Budget</th>
                    <th>Period</th>
                    <th width='15%'>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($proposaldevelopment as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->project_code }}</td>
                        <td>{{ $item->project_name_th }}</td>
                        <td>{{ $item->research_project }}</td>
                        <td>{{ $item->research_type }}</td>
                        <td>{{ $item->header_firstname }}</td>
                        <td>{{ $item->project_budget }}</td>
                        <td>{{ $item->project_year }} year</td>
                      <td>
                        <form action="{{ route('admin-proposaldevelopment.destroy',$item->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('admin-proposaldevelopment.show',$item->id) }}"> <i class="far fa-eye"></i></a>
                          <a class="btn btn-primary" href="{{ route('admin-proposaldevelopment.edit',$item->id) }}"><i class="far fa-edit"></i></a>
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
            {{  $proposaldevelopment->links() }}
            </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')

@endpush