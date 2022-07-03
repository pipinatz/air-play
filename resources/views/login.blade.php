@extends('layouts.main')
@section('content')
<section>
    <div class="container w-50 my-2">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    </div>
    <div class="container mx-auto mt-4 mb-4 h-75">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="border-style: solid;  border-width: 1px; border-radius: 10px;border-color: grey;">
                <div class="my-4" style="text-align: center">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none justify-content-center">
                        <img src="{{asset('storage/asset-images/logo_v2.png')}}" width="124" role="img" alt="">
                    </a>
                </div>
               <div class="col mx-auto px-3">
                    <h6 class="mb-4 text-center display-6 fs-3" style="font-family: 'Roboto', sans-serif;">Log in to your account</h6>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show text-center px-2 py-2" role="alert">
                            There was a problem with your login.
                        </div>
                    @endif
                    <form action="/Login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror " id="inputUsername" placeholder="Email" value="{{old('email')}}"/>
                        </div>
                        <div class="mb-3">
                            <input type="password" name='password' class="form-control @error('password') is-invalid @enderror" id="inputpass" placeholder="Password" />
                        </div>
                        <div class="container" style="text-align: center">
                            <button type="submit" class="btn btn-secondary" style="font-family: 'Roboto', sans-serif;">
                                Log in
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col" style="text-align: center">
                    <p class="mt-4">
                        Don't have an account?
                        <a href="/Sign-up" style="color: black">Sign Up here</a>
                    </p>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>
@endsection
