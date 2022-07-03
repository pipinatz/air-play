@extends('layouts.main')
@section('content')
<!-- Navbar Top Page -->

@include('partials.appManagementNavbar')
    <!-- Create News Page -->
    <section class="container mx-auto mt-lg-5 px-5" style="margin-bottom: 8rem">
      <h3 style="font-family: 'Bungee', cursive;">Create News</h3>
      <div class="mt-lg-4">
        <form method='POST' action='/AppManagement/News/CreateNews' enctype="multipart/form-data">
          @csrf
          <div class="col mx-auto">
            <div class="form-floating mb-3">
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="floatingInput" value="{{old('title')}}">
              <label for="floatingInput">News Title</label>
              @error('title')
                <div class="invalid-feedback ps-2">
                  News description cannot be empty
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <input id="description" type="hidden" name="description" class=" @error('description') is-invalid @enderror" value="{{old('description')}}">
              <trix-editor input="description" placeholder="Game Descrption" class=" @error('description') is-invalid @enderror"></trix-editor>   
              @error('description')
                <div class="invalid-feedback ps-2">
                  News description cannot be empty
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="mb-1">Upload News Banner</label>
              <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile" onchange="preview()">
              @error('image')
                <div class="invalid-feedback ps-2">
                  News banner must be an image and cannot be empty<br>
                </div>
              @enderror 
            </div>
            <div class="image-area mt-4 mb-3" style="border: 2px dashed rgba(133, 130, 130, 0.7); padding: 1rem; width: 65rem; ">
              <img id="frame" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
              {{-- <img id="frame" src="" class="img-fluid" style="width: 180px; height: 180px;"/> --}}
            </div>
            <div class="container px-0" style="text-align: right">
              <button type="submit" class="btn btn-light border" style="width: 5rem;">Submit</button>
            </div>
          </div>
        </form>
      </div>
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