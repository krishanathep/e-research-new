@extends('layouts.app')

@push('page_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-black-50">Proposal Submission</h1>
            </div>
            <div class="col-lg-12">
                <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!--
                <a class="btn btn-success mb-3" href="{{ route('admin-psubmission.create') }}"> <i class="fas fa-plus"></i> Create </a>
                -->
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
                    @foreach ($psubmission as $item)
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
                        <form action="{{ route('admin-psubmission.destroy',$item->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('admin-psubmission.show',$item->id) }}"> <i class="far fa-eye"></i></a>
                          <a class="btn btn-primary" href="{{ route('admin-psubmission.edit',$item->id) }}"><i class="far fa-edit"></i></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"> <i class="far fa-trash-alt"></i></button>
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
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush