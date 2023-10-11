@extends('layouts._master')
@section('content')
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
        <div class="me-auto">
          <h2 class="text-black font-w600">Departments</h2>
        </div>
        
          <div class="date" >
            <p class="mb-1">Dashboard / <span><a class="text-primary" href="appointment-add.html">All Departments</a></span></p>
          </div>
          
      </div>
    <div class="row">
      <div class="col-xl-12 card">
        
        <div class="table-responsive card-table card-body">
          <table id="example5" class="display dataTablesCard grey-border table-responsive-xl">
            <thead>
              <tr>
                <th>Department Name</th>
                <th>Department Number (Code)</th>
                <th>Department Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Dental Clinic</td>
                <td>D2324</td>
                <td>INSIDE HOSPITAL</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('custom_js')
<script>
    (function ($) {
      var table = $("#example5").DataTable({
        searching: true,
        paging: true,
        select: false,
        //info: false,
        lengthChange: false,
      });
    })(jQuery);
  </script>
@endpush