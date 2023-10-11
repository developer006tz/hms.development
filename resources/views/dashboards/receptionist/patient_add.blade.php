@extends('layouts._master')
@section('content')
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
      <div class="me-auto">
        <h2 class="text-black font-w600">Add Patient</h2>
      </div>
      
        <div class="date" >
          <p class="mb-1">Dashboard / <span><a class="text-primary" href="appointment-add.html">Add Patient</a></span></p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="basic-form">
                  <form>
                    <div class="row">
                      <div class="form-group col-sm-4">
                        <label for="patient">First Name</label>
                        <input type="text" class="form-control input-default custom-jason-input border-grey" placeholder="First name" />
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Middle Name</label>
                        <input type="text" class="form-control input-default custom-jason-input border-grey" placeholder="Middle name" />
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Last Name</label>
                        <input type="text" class="form-control input-default custom-jason-input border-grey" placeholder="Last name" />
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="patient">Email</label>
                        <input type="email" class="form-control input-default custom-jason-input border-grey" placeholder="Email" />
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Phone</label>
                        <input type="tel" class="form-control input-default custom-jason-input border-grey" placeholder="Phone" />
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Adress</label>
                        <input type="text" class="form-control input-default custom-jason-input border-grey" placeholder="Address" />
                      </div>

                        
                      <div class="form-group col-sm-4 mb-3">
                        <label for="patient">Gender*</label>
                        <select class="form-control default-select custom-jason-input" id="sel1">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-4 mb-3">
                        <label for="insurance">Has Insurance ?</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4 mb-3">
                      <label for="insurance">Blood Group</label>
                    <select class="form-control default-select custom-jason-input" id="sel1">
                      <option>A</option>
                      <option>A-</option>
                    </select>
                  </div>
                      <div class="form-group col-sm-4">
                        <label for="patient">Date of Birth</label>
                        <input type="date" class="form-control input-default custom-jason-input border-grey" placeholder="name" />
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="insurance">Nationality *</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Eyes Department</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="insurance">City *</label>
                      <select class="form-control default-select custom-jason-input" id="sel1">
                        <option>Judith Makunganya</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="patient">Zip code</label>
                      <input type="text" class="form-control input-default custom-jason-input border-grey" placeholder="Zip code" />
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="patient">Patient Photo</label>
                      <input type="file" class="form-control input-default custom-jason-input border-grey" placeholder="Zip code" />
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