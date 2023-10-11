@extends('layouts._master')
@section('content')
<!-- row -->
<div class="container-fluid">
        <div
            class="form-head d-flex page-titles mb-sm-4 mb-3 align-items-center bg-transparent">
            <div class="me-auto">
            <h2 class="text-black font-w600">Doctor Details</h2>
            <ol class="breadcrumb">
                <li class="">
                <a href="">Doctor</a>
                </li>
                <li class="">
                <a href="">#P-0616</a>
                </li>
            </ol>
            </div>
            <a href="app-profile.html" class="btn btn-outline-primary"
            >Update Profile</a
            >
        </div>

        <div class="row">
            <div class="col-xl-9">
                <div class="card doctor-details-card">
                  <div class="bg-img-bx">
                    <img  src="{{asset('assets/images/bg2.jpg')}}"" alt="" class="bg-img" />
                    <a href="doctor.html" class="btn btn-primary"
                      ><i class="las la-stethoscope me-3 scale5"></i>Dentist
                      Specialist</a>
                  </div>
                  <div class="card-body">
                    <div class="d-sm-flex d-block mb-3">
                      <div class="img-card mb-sm-0 mb-3">
                        <img  src="{{asset('assets/images/1.jpg')}}" alt="" />
                      </div>
                      <div class="card-info d-flex align-items-start">
                        <div class="me-auto pe-3">
                          <h2 class="font-w600 mb-sm-2 mb-1 text-black">
                            Dr. Kelvin Aron Msindai
                          </h2>
                          <p class="mb-sm-2 mb-1">#P-00016</p>
                          <span class="date">
                            <i class="las la-clock"></i>
                            Join on 21 August 2020, 12:45 AM</span
                          >
                        </div>
                        <span class="mr-ico bg-primary">
                          <i class="fa-solid fa-mars"></i>
                        </span>
                      </div>
                    </div>
                    <h4 class="fs-20 text-black font-w600">Biography</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo consequat. Duis aute irure dolor in
                      reprehenderit in voluptate velit esse cillum dolore eu
                      fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                      non proident, sunt in culpa qui officia deserunt mollit
                      anim id est laborum
                    </p>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt. Neque porro
                      quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci velit, sed quia non numquam eius
                      modi
                    </p>
                  </div>
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