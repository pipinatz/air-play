@extends('layouts.main')
@section('content')
  <section >
    <div class="container mx-auto mt-4 mb-4 h-75">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="border-style: solid; border-width: 1px; border-radius: 10px; border-color: grey;">
          <div class="my-4" style="text-align: center">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none justify-content-center">
                <img src="{{asset('storage/asset-images/logo.png')}}" width="124" role="img" alt="">
            </a>
          </div>
          <div class="col mx-auto w-75">
            <h3 class="mb-4 text-center">Register</h3>
            <form action="/Sign-up" method="POST">
              @csrf
              <div class="mb-3">
                <input type="text" class="form-control @error('username') is-invalid @enderror " name='username' id="username"  value="{{old('username')}}"
                  placeholder="Username" />
                @error('username')
                  <div class="invalid-feedback">
                    Username should be between 5 - 16 character <br> 
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name='email' id="email" value="{{old('email')}}" 
                  placeholder="Email" />
                @error('password')
                <div class="invalid-feedback">
                  Invalid email
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name='password' id="password"  
                  placeholder="Password" />
                @error('password')
                  <div class="invalid-feedback">
                    Password at least 8 character
                  </div>
                @enderror
              </div>
              <div class="container" style="text-align: center">
                <button type="submit" class="btn btn-secondary" style="font-family: 'Roboto', sans-serif;">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="col" style="text-align: center">
            <p class="mt-4">
              Already have an account? Login <a href="/Login" style="color: black">here</a>
            </p>
          </div>
        </div>
        <div class="col-4"></div>
      </div>
    </div>
  </section>
@endsection
