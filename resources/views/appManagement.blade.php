@extends('layouts.main')
@section('content')
    <!-- Navbar Top Page -->

    @include('partials.appManagementNavbar')

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
      <div class="row">
        <div class="col-3 text-center px-1">
          <div class="card mx-auto shadow-sm" style="width: 16rem;">
            <div class="card-body">
              <img src="{{ asset('storage/asset-images/crayon-1531.png') }}" alt="gambar logo publish" class="" style="width: 12rem; height: 12rem"/>
              <a class="btn btn-outline-dark border mt-4 btn-sm" href="/AppManagement/News/CreateNews" role="button" style="font-family: 'Roboto', sans-serif;">Publish News</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-1"></div> -->
        <div class="col-8 border rounded p-4 mx-auto">
          <div class="row">
            <div class="mb-3" style="font-family: 'Bungee', cursive; font-size: 22px">
              Last News Created
            </div>
          </div>
          {{-- {{dd($games)}} --}}
          @if (count($news))
            @foreach ($news as $n)
              <div class="row bg-light p-2 rounded mb-3 shadow-sm">
                <div class="col-3 text-center">
                  <img
                    src="{{ asset('storage/' . $n->image) }}"
                    class="rounded"
                    style="width: 10rem; height: 6rem;"
                    alt=""
                  />
                </div>
                <div class="col-9">
                  <h5 class="mb-0">{{$n->title}}</h5>
                  <div class="row justify-content-start my-0" style="font-size: 14px" >
                    <div class="col-12 text-secondary ">
                        <p class="my-0 ">Created : {{$n->date_created}}</p>
                    </div>
                    <div class="col-12 my-0 text-secondary">
                        <p class="my-0 ">Last Modified : {{$n->date_updated}}</p>
                    </div>
                  </div>
                  {{-- <p class="mb-2" style="font-size: 12px;">{{$g->date_created}}</p> --}}
                </div>
              </div>
            @endforeach
            <div class="row mt-3">
              <div class="col-4"></div>
              <div class="col-4 text-center">
                <a class="btn btn-outline-secondary p-2 btn-sm" href="/AppManagement/News" role="button" style="font-family: 'Roboto', sans-serif;">View More</a>
              </div>
              <div class="col-4"></div>
            </div>
          @else

          @endif
        </div>
      </div>
    </div>
    <div style="padding-bottom: 10rem"></div>
@endsection
