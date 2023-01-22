@extends('layouts.tempalte_login')
@section('login')
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <div class="col-lg-6 d-none d-lg-flex">
      </div> <!-- ./col -->
      <div class="col-lg-6">
        <div class="w-50 mx-auto">
          <form class="mx-auto text-center">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
              <img class="logo" src="assets/images/logo.png" alt="asiabangunabadi"/>
            </a>
            <h1 class="h6 mb-3">Sign in</h1>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Stay logged in </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          </form>
        </div> <!-- .card -->
      </div> <!-- ./col -->
    </div> <!-- .row -->
  </div>
@endsection
