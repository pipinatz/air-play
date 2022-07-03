@extends('layouts.main')
@section('content')
<!-- Navbar Top Page -->

@include('partials.appManagementNavbar')
    <!-- Create News Page -->
    <section class="container mb-lg-5" style="margin-bottom: 8rem">
      <p style="font-family: 'Bungee', cursive;">News Information Detail</p>
      <div class="row">
        <div class="col-5" style="text-align: center">
          <img
            src="{{asset('storage/'. $news->image)}}" width="400" style="height: 18rem; border-radius: 10px" alt=""
          />
        </div>
        <div class="col-7">
          <div class="col mx-auto">
            <form method='POST' action='/AppManagement/News/UpdateNews/{{$news->id}}' enctype="multipart/form-data">
              @csrf
              <div class="col mx-auto">
                <div class="form-floating mb-3">
                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="floatingInput" value="{{old('title', $news->title)}}">
                  <label for="floatingInput">News Title</label>
                  @error('title')
                    <div class="invalid-feedback ps-2">
                      News description cannot be empty
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input id="description" type="hidden" name="description" class=" @error('description') is-invalid @enderror" value="{{old('description', $news->description)}}">
                  <trix-editor input="description" placeholder="Game Descrption" class=" @error('description') is-invalid @enderror"></trix-editor>   
                  @error('description')
                    <div class="invalid-feedback ps-2">
                      News description cannot be empty
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="" class="mb-1">Upload News Banner</label>
                  <input type="text" hidden name="oldImage" value="{{$news->image}}">
                  <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile" onchange="preview()">
                  @error('image')
                    <div class="invalid-feedback ps-2">
                      News banner must be an image<br>
                    </div>
                  @enderror 
                </div>
                <div class="image-area mt-4 mb-3" style="border: 2px dashed rgba(133, 130, 130, 0.7); padding: 1rem; width: 40rem; ">
                  <img id="frame" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                  {{-- <img id="frame" src="" class="img-fluid" style="width: 180px; height: 180px;"/> --}}
                </div>
                <div class="container px-0 mb-3" style="text-align: right">
                  <button type="submit" class="btn btn-secondary border" style="width: 5rem; font-family: 'Roboto', sans-serif;" >Save</button>
                </div>
              </div>
            </form>
            <div class="d-flex flex-row-reverse ">
              <form action="/AppManagement/News/DeleteNews/{{$news->id}}" method="POST">
                @csrf
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 5rem; font-family: 'Roboto', sans-serif;">
                  Delete
                </button>
  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Permission</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        You are going to delete your news, delete now?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-family: 'Roboto', sans-serif;">Close</button>
                        <button type="submit" class="btn btn-primary border" style="font-family: 'Roboto', sans-serif;">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
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