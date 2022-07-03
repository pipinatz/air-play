@extends('layouts.main')
@section('content')
  <section>
    <div class="container w-75 mt-4" ;>
      <div class="mx-auto">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                There is something wrong when updating profile
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      </div>
      <div class="row">
        {{-- <div class="col-3" style="text-align: center; height: 270px; width: 270px"></div> --}}
        <div class="col-2"></div>

        <div class="col-8">
          <div class="mb-3 text-center">
            <img  src="{{asset('storage/'. $user->image)}}" class="card-img-top rounded-circle" alt="..."
                style="height: 124px; width: 124px ; object-fit: fill"/>
          </div>
          <form action="/Profile/UpdateProfile/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="oldImage" value="{{$user->image}}">
            <div class="form-floating mb-3 mx-auto">
              @if (session()->get('userType') == 'member')
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  id="floatingInput" value="{{$user->username}}">
              @else
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  id="floatingInput" value="{{$user->username}}" disabled>
              @endif
              <label for="floatingInput">Username</label>
              @error('username')
                <div class="invalid-feedback ps-2">
                  Username should be between 5 - 16 character <br> 
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control " id="floatingInput" value="{{$user->email}}" disabled>
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control " id="floatingInput" value="********" disabled>
              <label for="floatingInput">Password</label>
            </div>
            @if (session()->get('userType') == 'member')
            <div class="form-floating mb-3">
              <input type="password" name="newPassword" class="form-control  @error('newPassword') is-invalid @enderror" id="floatingInput">
              <label for="floatingInput">New Password</label>
              @error('newPassword')
                <div class="invalid-feedback ps-2">
                  New password should be between 5 - 16 character
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="developerName" class="form-control  @error('developerName') is-invalid @enderror" id="floatingInput" value="{{$user->developerAlias}}" >
              <label for="floatingInput">Developer Name</label>
              @error('developerName')
                <div class="invalid-feedback ps-2">
                  Developer name should be between 5 - 16 character and cannot be empty <br>
                </div>
              @enderror 
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="donationLink" class="form-control" id="floatingInput" value="{{$user->donationCode}}">
              <label for="floatingInput">Donation Link</label>
              <div class="text-secondary ps-2">
                *Make sure your donation link is correct
              </div>
            </div>
            <div class="mb-3">
              <input class="form-control @error('image') is-invalid @enderror"" type="file" name="image" id="formFile" onchange="preview()">
              @error('image')
                <div class="invalid-feedback ps-2">
                  The image must be an image<br>
                </div>
                @enderror 
                <div class="image-area mt-4 mb-3" style="border: 2px dashed rgba(133, 130, 130, 0.7); padding: 1rem;">
                  <img id="frame" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">

                </div>
            </div>
          
            <div class="container mb-5 p-0 text-end">
              <button type="submit" class="btn btn-secondary" style="font-family: 'Roboto', sans-serif;">Save</button>
            </div>

            @endif
          </form>
        </div>

        <div class="col-2"></div>
      </div>
    </div>

    @if (session()->get('userType') == 'admin')
      <div style="padding-bottom: 20rem"></div>
    @else
      <div style="padding-bottom: 10rem"></div>
    @endif
  </section>
  <script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }
  </script>
@endsection
