@extends('layouts._master')
@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Welcome kelvin | Doctor</h2>
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
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body me-3">
                  <h2 class="fs-34 text-black font-w600">76</h2>
                  <span>pending Appointment</span>
                </div>
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >

                <path
                d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z"
                fill="#0061f2"
              />
                  
                  <defs>
                    <clipPath id="clip0">
                      <rect width="40" height="40" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div class="progress rounded-0" style="height: 4px">
              <div
                class="progress-bar rounded-0 bg-secondary progress-animated"
                style="width: 100%; height: 4px"
                role="progressbar"
              >
                <span class="sr-only">100% Complete</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body me-3">
                  <h2 class="fs-34 text-black font-w600">76</h2>
                  <span>Pending Patients</span>
                </div>
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z"
                    fill="#0061f2"
                  />
                </svg>
              </div>
            </div>
            <div class="progress rounded-0" style="height: 4px">
              <div
                class="progress-bar rounded-0 bg-secondary progress-animated"
                style="width: 100%; height: 4px"
                role="progressbar"
              >
                <span class="sr-only">90% Complete</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body me-3">
                  <h2 class="fs-34 text-black font-w600">10</h2>
                  <span>In- Patients</span>
                </div>
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z"
                    fill="#0061f2"
                  />
                </svg>
              </div>
            </div>
            <div class="progress rounded-0" style="height: 4px">
              <div
                class="progress-bar rounded-0 bg-secondary progress-animated"
                style="width: 100%; height: 4px"
                role="progressbar"
              >
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <div class="media-body me-3">
                  <h2 class="fs-34 text-black font-w600">56</h2>
                  <span>Total Patient</span>
                </div>
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z"
                    fill="#0061f2"
                  />
                </svg>
              </div>
            </div>
            <div class="progress rounded-0" style="height: 4px">
              <div
                class="progress-bar rounded-0 bg-secondary progress-animated"
                style="width: 100%; height: 4px"
                role="progressbar"
              >
                <span class="sr-only">94% Complete</span>
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
                <th>Appointment date and time</th>
                <th>Patient Name</th>
            
                <th>Status</th>
                <th class="">Action</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>#P-00014</td>
                <td>11/10/2023, 12:42 AM</td>
                <td>Cive Slauw</td>
                
                <td>
                  <span class="badge badge-outline-warning">
                    <i class="fa fa-circle text-warning me-1"></i>
                    Pending
                  </span>
                </td>
                <td>
                    <button type="button" class="btn btn-rounded btn-secondary">
                        view
                    </button>
                    <button type="button" class="btn btn-rounded btn-success">
                        reschedule
                    </button>
                </td>
              </tr>
              
              <tr>
                <td>#P-00017</td>
                <td>11/10/2023, 12:42 AM</td>
                <td>David Bekam</td>
               
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-circle text-warning me-1"></i>
                    In Treatment
                  </span>
                </td>
                <td>
                  <div class="dropdown ms-auto c-pointer ">
                    <button type="button" class="btn btn-rounded btn-secondary">
                        view
                    </button>
                    <button type="button" class="btn btn-rounded btn-success">
                        reschedule
                    </button>
                </td>
              </tr>
              <tr>
                <td>#P-00012</td>
                <td>11/10/2023, 12:42 AM</td>
                <td>Alexia Kev</td>
             
                <td>
                  <span class="badge badge-success light">
                    <i class="fa fa-check text-success me-1"></i>
                    Treated
                  </span>
                </td>
                <td>
                    <button type="button" class="btn btn-rounded btn-secondary">
                        view
                    </button>
                    <button type="button" class="btn btn-rounded btn-success">
                        reschedule
                    </button>
                      
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