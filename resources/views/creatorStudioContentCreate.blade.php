@extends('layouts.main')
@section('content')
  @include('partials.creatorStudioNavbar')

  <section class="container" style="margin-bottom: 8rem">
    <p style="font-family: 'Bungee', cursive;">Publishing game</p>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-9">
        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            There is something wrong when creating new game
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="col mx-auto">
          <form class="w-75 mx-auto" action="/CreatorStudio/Game/CreateGame" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="mb-4 text-start" style="font-family: 'Staatliches', cursive; font-size: 18px">
              General Information
            </p>
            <div class="mb-3">
            <div class="form-floating mb-3">
              <input type="text" name='title' class="form-control  @error('title') is-invalid @enderror" id="floatingTitle" value="{{old('title')}}"/>
              <label for="floatingTitle">Title</label>
              @error('title')
                <div class="invalid-feedback ps-2">
                  Title should be 5 - 24 character
                </div>
              @enderror
            </div>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" name="genre" id="floatingSelect" aria-label="Floating label select example">
                <option value="Action">Action</option>
                <option value="Adventure">Adventure</option>
                <option value="Horror">Horror</option>
                <option value="Platformer">Platformer</option>
                <option value="Puzzle">Puzzle</option>
                <option value="Racing">Racing</option>
                <option value="Role Playing">Role Playing</option>
                <option value="Simulation">Simulation</option>
                <option value="Sport">Sport</option>
                <option value="Strategy">Strategy</option>
              </select>
              <label for="floatingSelect">Genre</label>
            </div>

            <div class="mb-3">
              <input id="description" type="hidden" name="description" class=" @error('description') is-invalid @enderror" value="{{old('description')}}">
              <trix-editor input="description" placeholder="Game Descrption"></trix-editor>   
              @error('description')
                <div class="invalid-feedback ps-2">
                  Game description cannot be empty
                </div>
              @enderror
            </div>

            <br /><br />

            <p class="mb-4 text-start" style="font-family: 'Staatliches', cursive; font-size: 18px">
              Specification
            </p>

            <div class="form-floating mb-3">
              <select class="form-select" name="platform" id="floatingSelect" aria-label="Floating label select example">
                <option value="Windows">Windows</option>
                <option value="MacOS">macOS</option>
                <option value="Android">Android</option>
                <option value="IOS">iOS</option>
              </select>
              <label for="floatingSelect">Platform</label>
            </div>

            <br>

            <div class="form-floating mb-3">
              <input type="text" name='minimumOS' class="form-control @error('minimumOS') is-invalid @enderror" id="floatingMinimumOS" value="{{old('minimumOS')}}"/>
              <label for="floatingMinimumOS">Minimum Operating System</label>
              @error('minimumOS')
                <div class="invalid-feedback ps-2">
                  Minimum operating system cannot be empty
                </div>
              @enderror
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" name='minimumMemory' class="form-control @error('minimumMemory') is-invalid @enderror" id="floatingMinimumMemory" value="{{old('minimumMemory')}}"/>
                <label style="margin-left: 12px" for="floatingMinimumMemory">Minimum Memory</label>
                @error('minimumMemory')
                  <div class="invalid-feedback ps-2">
                    Minimum memory cannot be empty
                  </div>
                @enderror
              </div>
              <div class="col form-floating">
                <input type="text" name='minimumProcessor' class="form-control @error('minimumProcessor') is-invalid @enderror" id="floatingMinimumProcessor" value="{{old('minimumProcessor')}}"/>
                <label style="margin-left: 12px" for="floatingMinimumProcessor">Minimum Processor</label>
                @error('minimumProcessor')
                  <div class="invalid-feedback ps-2">
                    Minimum processor cannot be empty
                  </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" name='minimumGraphic' class="form-control @error('minimumGraphic') is-invalid @enderror" id="floatingMinimumGraphicCard" value="{{old('minimumGraphic')}}"/>
                <label style="margin-left: 12px" for="floatingMinimumGraphicCard">Minimum Graphic Card</label>
                @error('minimumGraphic')
                  <div class="invalid-feedback ps-2">
                    Minimum graphic card cannot be empty
                  </div>
                @enderror
              </div>
              <div class="col form-floating">
                <input type="text" name='minimumStorage' class="form-control @error('minimumStorage') is-invalid @enderror" id="floatingMinimumStorage" value="{{old('minimumStorage')}}"/>
                <label style="margin-left: 12px" for="floatingMinimumStorage">Minimum Storage</label>
                @error('minimumStorage')
                  <div class="invalid-feedback ps-2">
                    Minimum storage cannot be empty
                  </div>
                @enderror
              </div>
            </div>

            <br />

            <div class="form-floating mb-3">
              <input type="text" name='recommendedOS' class="form-control @error('recommendedOS') is-invalid @enderror" id="floatingRecommendedOS" value="{{old('recommendedOS')}}"/>
              <label for="floatingRecommendedOS">Recommended Operating System</label>
              @error('recommendedOS')
                <div class="invalid-feedback ps-2">
                  Recommended operating system cannot be empty
                </div>
              @enderror
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" name='recommendedMemory' class="form-control  @error('recommendedMemory') is-invalid @enderror" id="floatingRecommendedMemory" value="{{old('recommendedMemory')}}"/>
                <label style="margin-left: 12px" for="floatingRecommendedMemory">Recommended Memory</label>
                @error('recommendedMemory')
                  <div class="invalid-feedback ps-2">
                    Recommended memory cannot be empty
                  </div>
                @enderror
              </div>
              <div class="col form-floating">
                <input type="text" name='recommendedProcessor' class="form-control  @error('recommendedProcessor') is-invalid @enderror" id="floatingRecommendedProcessor" value="{{old('recommendedProcessor')}}"/>
                <label style="margin-left: 12px" for="floatingRecommendedProcessor">Recommended Processor</label>
                @error('recommendedProcessor')
                  <div class="invalid-feedback ps-2">
                    Recommended processor cannot be empty
                  </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" name='recommendedGraphic' class="form-control  @error('recommendedGraphic') is-invalid @enderror" id="floatingRecommendedGraphicCard" value="{{old('recommendedGraphic')}}"/>
                <label style="margin-left: 12px" for="floatingRecommendedGraphicCard">Recommended Graphic Card</label>
                @error('recommendedGraphic')
                  <div class="invalid-feedback ps-2">
                    Recommended graphic card cannot be empty
                  </div>
                @enderror
              </div>
              <div class="col form-floating">
                <input type="text" name='recommendedStorage' class="form-control  @error('recommendedStorage') is-invalid @enderror" id="floatingRecommendedStorage" value="{{old('recommendedStorage')}}"/>
                <label style="margin-left: 12px" for="floatingRecommendedStorage">Recommended Storage</label>
                @error('recommendedStorage')
                  <div class="invalid-feedback ps-2">
                    Recommended storage cannot be empty
                  </div>
                @enderror
              </div>
            </div>

            <br /><br />

            <p class="mb-4 text-start" style="font-family: 'Staatliches', cursive; font-size: 18px">
              Game
            </p>

            <div class="form-floating mb-3">
              <input type="text" name='game' class="form-control  @error('game') is-invalid @enderror" id="floatingLink" value="{{old('game')}}"/>
              <label for="floatingLink">Download Link</label>
              @error('game')
                <div class="invalid-feedback ps-2">
                  Game's download link cannot be empty
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="" class="mb-1">Upload Game Banner</label>
              <input class="form-control @error('image') is-invalid @enderror"" type="file" name="image" id="formFile" onchange="preview()">
              @error('image')
                <div class="invalid-feedback ps-2">
                  Game banner must be an image and cannot be empty<br>
                </div>
              @enderror 
            </div>

            <div class="image-area mt-4 mb-3" style="border: 2px dashed rgba(133, 130, 130, 0.7); padding: 1rem; width: 622px; ">
              <img id="frame" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
              {{-- <img id="frame" src="" class="img-fluid" style="width: 180px; height: 180px;"/> --}}
            </div>

            <div class="container px-0" style="text-align: right">
              <button type="submit" class="btn btn-secondary" style="font-family: 'Roboto', sans-serif;">Publish</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-1"></div>
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