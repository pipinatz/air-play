@extends('layouts.main')
@section('content')
    <!-- Navbar Top Page -->

    @include('partials.creatorStudioNavbar')

    <!-- Middle Page News Released & Publish -->
    <div class="container">
      @if (session('createSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('createSuccess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('updateSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('updateSuccess')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('deleteSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('deleteSuccess')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('createForumSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('createForumSuccess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (session('updateForumSuccess'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('updateForumSuccess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @if (session('deleteForumSuccess'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('deleteForumSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="row">
        <div class="col-3 text-center px-1">
          <div class="card mx-auto" style="width: 16rem;">
            <div class="card-body">
              <img src="{{ asset('storage/asset-images/crayon-video-game.png') }}" alt="gambar logo publish" class="" style="width: 12rem; height: 12rem"/>
              <a class="btn btn-outline-dark border mt-4 btn-sm" href="/CreatorStudio/Game/CreateGame" role="button" style="font-family: 'Roboto', sans-serif;">Publish Game</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-1"></div> -->
        <div class="col-8 border rounded p-4 mx-auto">
          <div class="row">
            <div class="col-12 mb-3" style="font-family: 'Bungee', cursive; font-size: 22px">
              Last Game Released
            </div>
          </div>
          {{-- {{dd($games)}} --}}
          @if (count($games))
            @foreach ($games as $g)
              <div class="row bg-light p-3 rounded mb-3 shadow-sm">
                <div class="col-3 text-center">
                  <img
                    src="{{ asset('storage/' . $g->image) }}"
                    class="rounded"
                    style="width: 10rem; height: 6rem;"
                    alt=""
                  />
                </div>
                <div class="col-9">
                  <h5 class="mb-2" style="font-family: 'Signika Negative', sans-serif; font-size: 18px;">{{$g->title}}</h5>
                  <div class="row justify-content-start my-0" style="font-size: 14px; font-family: 'Signika Negative', sans-serif;" >
                    <div class="col-12 text-secondary ">
                        <p class="my-0 ">Created : {{$g->date_created}}</p>
                    </div>
                    <div class="col-12 my-0 text-secondary">
                        <p class="my-0 ">Last Modified : {{$g->date_updated}}</p>
                    </div>
                  </div>
                  {{-- <p class="mb-2" style="font-size: 12px;">{{$g->date_created}}</p> --}}
                </div>
              </div>
            @endforeach
            <div class="row mt-3">
              <div class="col-4"></div>
              <div class="col-4 text-center">
                <a class="btn btn-outline-secondary p-2 btn-sm" href="/CreatorStudio/Games" role="button" style="font-family: 'Roboto', sans-serif;">View More</a>
              </div>
              <div class="col-4"></div>
            </div>
          @else

          @endif
          
        </div>
      </div>
    </div>


    <!-- Bottom Page Forum Released & Publish -->
    <div class="container mt-lg-5" style="margin-bottom: 8rem">
      <div class="row">
        <div class="col-3 text-center px-1">
          <div class="card shadow-sm mx-auto" style="width: 16rem;">
            <div class="card-body">
              <img src="{{ asset('storage/asset-images/crayon-1531.png') }}" alt="gambar logo publish" class="" style="width: 12rem; height: 12rem"/>
              <a class="btn btn-outline-dark border mt-4 btn-sm" href="/CreatorStudio/Forum/CreateForum" role="button" style="font-family: 'Roboto', sans-serif;">Publish Forum</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-1"></div> -->
        <div class="col-8 border rounded p-4 mx-auto">
          <div class="row">
            <div class="col-12 mb-3" style="font-family: 'Bungee', cursive; font-size: 22px">
              Last Forum Released
            </div>
          </div>
          @if (count($forums))
            @foreach ($forums as $f)
            <div class="row bg-light p-3 rounded mb-3 shadow-sm">
              <div class="col-10">
                <h5 class="mb-0">{{$f->title}}</h5>
                <div class="row" style="font-size: 14px">
                  <p class="mb-2 text-secondary col-4">Created : {{$f->date_created}}</p>
                  <p class="mb-2 text-secondary col-5">Last Modified : {{$f->date_updated}}</p>
                </div>
                <p class="mb-2" style="font-size: 13px;">{{$f->excerpt}}</p>
              </div>
            </div>
            @endforeach
            <div class="row mt-3">
              <div class="col-4"></div>
              <div class="col-4 text-center">
                <a class="btn btn-outline-secondary p-2 btn-sm" style="width: 120px; font-family: 'Roboto', sans-serif;" href="/CreatorStudio/Forums" role="button">View More<a>
              </div>
              <div class="col-4"></div>
            </div>
          @else
            
          @endif
          
        </div>
      </div>
    </div>
@endsection
