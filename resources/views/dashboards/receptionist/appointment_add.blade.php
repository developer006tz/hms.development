@extends('layouts._master')
@section('content')
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Add Appointment</h2>
      </div>
      
        <div class="date" >
          <p class="mb-1">Dashboard / <span><a class="text-primary" href="appointment-add.html">Add Appontment</a></span></p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="basic-form">
                  <form>
                    <div class="row">
                        
                      <div class="form-group col-sm-6 mb-3">
                        <label for="patient">Patient Name*</label>
                        <select class="form-control default-select custom-jason-input" id="sel1">
                          <option>Ibrahim Juma</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 mb-3">
                        <label for="insurance">Has Insurance ?</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Apointment Date</label>
                        <input type="date" class="form-control input-default custom-jason-input border-grey" placeholder="input-default" />
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="insurance">Doctor Department *</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Eyes Department</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="insurance">Doctor Name *</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Judith Makunganya</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                        Create
                      </button>
                    </div>
                    
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection