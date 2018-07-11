@extends('layouts.layout')
@section('content')
    <section class="cryptos-about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/about.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
            
                        <div class="section-heading">
                            <h3>Let’s change <br><span>the world</span> together</h3>
                            <form class="login-box" method="post" action="">
                    <h4 class="margin-bottom-1x">Login</h4>
                    <div class="form-group input-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
                    <span class="input-group-addon">
                     <i class="icon-mail"></i>
                    </span>
            </div>
            <div class="form-group input-group">
              <input class="form-control" type="password" id="password" name="password" placeholder="Passwort" required>
              <span class="input-group-addon">
                <i class="icon-lock"></i>
              </span>
            </div>
            <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                <label class="custom-control-label" for="remember_me">Remember me</label>
              </div><a class="navi-link" href="account-password-recovery.html">Passwort vergessen?</a>
            </div>
            <div class="text-center text-sm-right">
              <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
              {{ csrf_field() }}
            </div>
          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
