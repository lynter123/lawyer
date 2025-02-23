@extends('layout.master1')

@section('dynblock')

<!-- Register section start -->
<div class="about_section layout_padding">
    <div class="container pt-5 h-150">
      <div class="row justify-content-center align-items-center h-150">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
            <div style="text-align: center">
                <a href="/"><img class="mb-4" src="asset/images/HBSLaw-New-Logo.png" alt="" width="72" height="57"></a>
                <h1 class="h3 mb-3 fw-normal">Client Registration Form</h1>
            </div>
              <form>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                      <label class="form-label" for="Password">Password</label>
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
