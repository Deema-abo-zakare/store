@extends('layouts.login')

@section('content')

<div class="card-body">
  <p class="login-box-msg">Register a new membership</p>

  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Full name" name="name" id="name">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Email" name="email" id="email">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Password" name="password" id="password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" id="password-confirm">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <div class="icheck-primary">
          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
          <label for="agreeTerms">
           I agree to the <a href="#">terms</a>
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <div class="social-auth-links text-center">
    <a href="#" class="btn btn-block btn-primary">
      <i class="fab fa-facebook mr-2"></i>
      Sign up using Facebook
    </a>
    <a href="#" class="btn btn-block btn-danger">
      <i class="fab fa-google-plus mr-2"></i>
      Sign up using Google+
    </a>
  </div>

  <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
</div>
<!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection

