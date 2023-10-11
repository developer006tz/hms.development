@extends('layouts._master')
@section('content')
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
        <div class="me-auto">
          <h2 class="text-black font-w600">Doctors on duty</h2>
        </div>
        
          <div class="date" >
            <p class="mb-1">Dashboard / <span><a class="text-primary" href="appointment-add.html">Doctors on duty</a></span></p>
          </div>
          
      </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive card-table">
          <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
            <thead>
              <tr>
                <th>Doctor ID</th>
                <th>Doctor name</th>
                <th>Department</th>
                <th>Schedule start Date</th>
                <th>Schedule End Date</th>
                <th>Schedule Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-success">Active</div>
                </td>
              </tr>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-success">Active</div>
                </td>
              </tr>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-success">Active</div>
                </td>
              </tr>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-danger">Cancelled</div>
                </td>
              </tr>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-success">Active</div>
                </td>
              </tr>
              <tr>
                <td>#d-00014</td>
                <td>Amwene yesaya</td>
                <td>Mother and Child</td>
                <td>14-04-2023</td>
                <td>18-04-2023</td>
                <td>
                    <div class="badge bg-danger">Cancelled</div>
                </td>
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