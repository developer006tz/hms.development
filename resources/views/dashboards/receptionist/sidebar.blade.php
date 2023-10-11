
<div class="deznav">
    <div class="deznav-scroll">
      <ul class="metismenu" id="menu">
       
        <li>
          <a href="{{route('dashboard')}}" class="ai-icon" aria-expanded="false">
            <i class="flaticon-381-networking"></i>
            <span class="nav-text">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-notepad"></i>
            <span class="nav-text">Appointments</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('appointment.add')}}">New Appointment</a></li>
            <li><a href="{{route('appointment.list')}}">Appointment List</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-user-9"></i>
            <span class="nav-text">Patients</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('patient.add')}}">New Patient</a></li>
            <li><a href="{{route('patient.list')}}">Patient List</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-user"></i>
            <span class="nav-text">Doctors</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('doctor.ondute')}}">List Doctors On duty</a></li>
            <li><a href="{{route('doctor.list')}}">List Doctors</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-television"></i>
            <span class="nav-text">Departments</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{{route('department.list')}}">List Departments</a></li>
          </ul>
        </li>
       
      </ul>


    </div>
  </div>