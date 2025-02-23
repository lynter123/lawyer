@extends('layout.master1')

@section('dynblock')

<!-- Register section start -->
<div class="about_section layout_padding">
    <div class="container pt-10 h-150">
      <div class="row justify-content-center align-items-center h-150">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
            <a href="/"><img class="mb-4" src="asset/images/HBSLaw-New-Logo.png" alt="" width="72" height="57" style="margin-left:230px"></a>
            <h1 class="mb-4 pb-2 pb-md-0 mb-md-5" style="margin-left:130px">Lawyer Registration Form</h1>
            <form>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <label for="dob">Date of birth:</label>
                        <input type="date" id="dob" name="dob">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="option3" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">

                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-3">

                    <div class="form-outline">
                      <input type="tel" id="password" class="form-control form-control-lg" />
                      <label class="form-label" for="Password">Password</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        
                      <select class="select form-control-md">
                        <option value="1" disabled>Choose your field</option>
                        <option value="2">Bankruptcy</option>
                        <option value="3">Business</option>
                        <option value="4">Constitutional</option>
                        <option value="5">Criminal Defense</option>
                        <option value="6">Employment and Labor</option>
                        <option value="7">Entertainment</option>
                        <option value="8">Estate Planning</option>
                        <option value="9">Family</option>
                        <option value="10">Immigration</option>
                        <option value="11">Intellectual Property</option>
                        <option value="12">Personal Injury</option>
                        <option value="13">Tax</option>
                      </select>
                      <br><br>
                      <label class="form-label select-label">Choose your field</label>
                    </div>

                    <div class="col-md-6 mb-1">
                        {{-- <div class="form-outline">
                          <input type="text" id="phoneNumber" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber"> <p> Phone number</p></label>
                        </div> --}}

                        <div class="form-outline">
                            <input type="text" id="phoneNumber" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                          </div>
                      </div>
                  </div>

                <div class="d-flex justify-content-center">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Register section end -->

@stop
