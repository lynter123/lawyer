@extends('layout.master1')

@section('dynblock')

<!-- Sign in section start -->
<div class="layout_padding0" style="background-color: #f2f7fd;">
    <div class="container">
        <main class="form-signin" style="align-items: center; padding-top: 40px; padding-bottom: 40px;">
            <form>
            <a href="/"><img class="mb-4" src="asset/images/HBSLaw-New-Logo.png" alt="" width="72" height="57"></a>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg" type="submit" style="background-color: #5ca0e9;"><span style="color:white;">Sign in</span></button>
            </form>
        </main>
    </div>
</div>

<!-- Sign in section end -->

@stop
