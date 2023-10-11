@extends('layouts._master')
@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Welcome Ludovick | Receptionist</h2>
        <p class="mb-0">25-10-2023 | 11:21 AM</p>
      </div>
      <!-- <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 me-3"></i>Customize
        Layout</a> -->
        <div class="date" >
          <p class="mb-1">Show by date</p>
          <input name="datepicker" class="datepicker-default form-control" placeholder="choose date" id="datepicker" style="background-color: #0061f2 !important; color: #fff !important;" />
        </div>
        
    </div>
    <div class="row">
      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
          <div class="card-body p-4">
            <div class="media">
              <span class="me-3">
                <i class="flaticon-381-calendar-1"></i>
              </span>
              <div class="media-body text-white text-end">
                <p class="mb-1">Appointment</p>
                <h3 class="text-white">36</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
          <div class="card-body p-4">
            <div class="media">
              <span class="me-3">
                <i class="flaticon-381-user-9"></i>
              </span>
              <div class="media-body text-white text-end">
                <p class="mb-1">New Patient</p>
                <h3 class="text-white">23</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
          <div class="card-body p-4">
            <div class="media">
              <span class="me-3">
                <i class="flaticon-381-user-7"></i>
              </span>
              <div class="media-body text-white text-end">
                <p class="mb-1">Doctors on Dute</p>
                <h3 class="text-white">7</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
          <div class="card-body p-4">
            <div class="media">
              <span class="me-3">
                <i class="flaticon-381-user-9"></i>
              </span>
              <div class="media-body text-white text-end">
                <p class="mb-1">Pending Appointments</p>
                <h3 class="text-white">12</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header d-sm-flex d-block pb-0 border-0">
                <div class="me-auto pe-3">
                  <h4 class="text-black fs-20 mb-0">
                    Patient Overview
                  </h4>
                </div>
                <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#Daily" role="tab">
                        Today
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">
                        Weekly
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#Monthly" role="tab">
                        Monthly
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="Daily" role="tabpanel">
                    <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                      <div class="me-auto d-flex align-items-center py-3">
                        <span class="heart-ai bg-primary me-3">
                          <i class="fa-regular fa-heart" aria-hidden="true"></i>
                        </span>
                        <div>
                          <p class="fs-18 mb-2">Total Patient</p>
                          <span class="fs-26 text-primary font-w600">36</span>
                        </div>
                      </div>
                      <ul class="users ps-3 py-2">
                        <li><img src="{{asset('assets/images/users/1.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/2.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/3.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/4.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/5.png')}}" alt="" /></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Weekly" role="tabpanel">
                    <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                      <div class="me-auto py-3 d-flex align-items-center">
                        <span class="heart-ai bg-primary me-3">
                          <i class="fa-regular fa-heart" aria-hidden="true"></i>
                        </span>
                        <div>
                          <p class="fs-18 mb-2">Total Patient</p>
                          <span class="fs-26 text-primary font-w600">230</span>
                        </div>
                      </div>
                      <ul class="users ps-3 py-2">
                        <li><img src="{{asset('assets/images/users/2.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/4.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/1.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/4.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/3.png')}}" alt="" /></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Monthly" role="tabpanel">
                    <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                      <div class="me-auto py-3 d-flex align-items-center">
                        <span class="heart-ai bg-primary me-3">
                          <i class="fa-regular fa-heart" aria-hidden="true"></i>
                        </span>
                        <div>
                          <p class="fs-18 mb-2">Total Patient</p>
                          <span class="fs-26 text-primary font-w600">1002</span>
                        </div>
                      </div>
                      <ul class="users ps-3 py-2">
                        <li><img src="{{asset('assets/images/users/2.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/4.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/1.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/4.png')}}" alt="" /></li>
                        <li><img src="{{asset('assets/images/users/3.png')}}" alt="" /></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
       
        </div>
      </div>
      <div class="col-xl-6">
        <div class="row">
          <div class="col-xl-12">
            <div class="card appointment-schedule">
              <div class="card-header pb-0 border-0">
                <h3 class="fs-20 text-black mb-0">
                 Notifications
                </h3>
                <div class="dropdown ms-auto c-pointer">
                  <div class="btn-link p-2 bg-light" data-bs-toggle="dropdown">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-black" href="javascript:;">View all</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-12 col-xxl-12 col-md-6 height110 dz-scroll" id="appointment-schedule">
                    <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
                      <div class="me-auto">
                        <p class="text-black font-w600 mb-2">
                          Wednesday, June 3th
                        </p>
                        <ul>
                          <li>
                            <i class="las la-clock"></i>10:30 AM | <i class="las la-user"></i>Dr. Samantha
                          </li>
                          <li>Habari , huyo mgonjwa Muandikie ripoti ya ICU tu</li>
                        </ul>
                      </div>
                      <a href="javascript:void(0)" class="text-success me-3 mb-2">
                        <i class="las la-check-circle scale5"></i>
                      </a>
                    </div>
                    <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
                      <div class="me-auto">
                        <p class="text-black font-w600 mb-2">
                          Wednesday, June 3th
                        </p>
                        <ul>
                          <li>
                            <i class="las la-clock"></i>10:30 AM | <i class="las la-user"></i>Dr. Samantha
                          </li>
                          <li>Habari , huyo mgonjwa Muandikie ripoti ya ICU tu</li>
                        </ul>
                      </div>
                      <a href="javascript:void(0)" class="text-warning me-3 mb-2">
                        <i class="las la-check-circle scale5"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
        </div>
      </div>
    </div>

    <!-- test  -->
    
    <!-- test end  -->
  </div>
  <div class="container-fluid">
    <div class="form-head align-items-center d-flex justify-content-end mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Today Appointments</h2>
      </div>
      <div>
        <a href="javascript:void(0)" class="btn btn-primary me-3" data-bs-toggle="modal"
          data-bs-target="#addOrderModal">+ New Appointment</a>
          <a href="javascript:void(0)" class="btn btn-success me-3" data-bs-toggle="modal"
          data-bs-target="#addOrderModal">+ New Patient</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive card-table">
          <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
            <thead>
              <tr>
               
                <th>Patient ID</th>
                <th>Date Check In</th>
                <th>Patient Name</th>
                <th>Doctor Assgined</th>
                <th>Status</th>
                <th class="text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#P-00014</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Cive Slauw</td>
                <td>Dr. Samantha</td>
                <td>
                  <span class="badge badge-outline-warning">
                    <i class="fa fa-circle text-warning me-1"></i>
                    Pending
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
                <td>#P-00017</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>David Bekam</td>
                <td>Dr. Kevin Zidan</td>
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
                <td>#P-00012</td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Alexia Kev</td>
                <td>Dr. Samantha</td>
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-check text-success me-1"></i>
                    Treated
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
  @endsection