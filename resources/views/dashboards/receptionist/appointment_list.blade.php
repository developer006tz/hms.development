@extends('layouts._master')
@section('content')
<div class="container-fluid">
    <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Apointments</h2>
        <p class="mb-1">Dashboard / <span><a class="text-primary" href="appointment-add.html">Appontment List</a></span></p>
      </div>
      <div>
        <a href="appointment-add.html" class="btn btn-primary me-3" >+ New Appointment</a>
        <a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 me-3"></i>Filter
          Date</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive card-table">
          <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
            <thead>
              <tr>
                <th>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="checkAll" required="" />
                    <label class="form-check-label" for="checkAll"></label>
                  </div>
                </th>
                <th>Patient ID</th>
                <th>Date Check In</th>
                <th>Patient Name</th>
                <th>Doctor Assgined</th>
                <th>Invoice</th>
                <th>Invoice Amount (Tsh)</th>
                <th>Invoice Status</th>
                <th>Treatment Status</th>
                <th class="text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="" />
                    <label class="form-check-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>HMS001211228</td>
                <td class="bold"> <b>37,000</b>  Tsh</td>
                <td>
                  <span class="badge badge-warning">
                    Partial Paid
                  </span>
                </td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer text-end">
                    <div class="btn-link" data-bs-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Accept Patient</a>
                      <a class="dropdown-item" href="#">Reject Order</a>
                      <a class="dropdown-item" href="#">View Details</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="" />
                    <label class="form-check-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>HMS001211228</td>
                <td class="bold"> <b>37,000</b>  Tsh</td>
                <td>
                  <span class="badge badge-warning">
                    Partial Paid
                  </span>
                </td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer text-end">
                    <div class="btn-link" data-bs-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Accept Patient</a>
                      <a class="dropdown-item" href="#">Reject Order</a>
                      <a class="dropdown-item" href="#">View Details</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="" />
                    <label class="form-check-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>HMS001211228</td>
                <td class="bold"> <b>37,000</b>  Tsh</td>
                <td>
                  <span class="badge badge-warning">
                    Partial Paid
                  </span>
                </td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer text-end">
                    <div class="btn-link" data-bs-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Accept Patient</a>
                      <a class="dropdown-item" href="#">Reject Order</a>
                      <a class="dropdown-item" href="#">View Details</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="" />
                    <label class="form-check-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>HMS001211228</td>
                <td class="bold"> <b>37,000</b>  Tsh</td>
                <td>
                  <span class="badge badge-warning">
                    Partial Paid
                  </span>
                </td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer text-end">
                    <div class="btn-link" data-bs-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Accept Patient</a>
                      <a class="dropdown-item" href="#">Reject Order</a>
                      <a class="dropdown-item" href="#">View Details</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="" />
                    <label class="form-check-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>HMS001211228</td>
                <td class="bold"> <b>37,000</b>  Tsh</td>
                <td>
                  <span class="badge badge-warning">
                    Partial Paid
                  </span>
                </td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer text-end">
                    <div class="btn-link" data-bs-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                          stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Accept Patient</a>
                      <a class="dropdown-item" href="#">Reject Order</a>
                      <a class="dropdown-item" href="#">View Details</a>
                    </div>
                  </div>
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