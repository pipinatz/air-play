@extends('layouts.main')
  <!-- Top Page -->
@section('content')
  <div class="row mb-5 mt-2 shadow" style="height: 50vh; text-align: left; ">
    <div class="col-7 ps-4 align-self-center" style="text-align: right">
      <img src="{{asset('storage/asset-images/dizzy-gaming.png')}}" alt="" class="" style="width: 40rem;" >
    </div>
    <div class="col-5 align-self-center px-4">
      <p class="h1 mb-0" style="font-family: 'Squada One', cursive;">airPlay</p>
      <p class="h5 mb-3 w-75" style="font-family: 'Roboto', sans-serif;">For a better game development community</p>
      <a class="btn btn-dark btn-sm" href="/Sign-up" role="button" style="font-family: 'Roboto', sans-serif;">Join Us</a>
    </div>
  </div>

  <div class="container ">
    <p class="h6 my-4 px-3" style="font-family: 'Bungee', cursive; font-size: 36px">Games</p>
    <div class="d-flex flex-row flex-wrap justify-content-between">
      @foreach ($game as $g)
        @if ($loop->index < 8)
          <div class="mx-2 mb-4 rounded text-break" style="width: 16rem">
            <img src="{{asset('storage/'. $g->image)}}" alt="" class="rounded mb-2 px-1" style="height: 10rem; width: 16rem">
            <h6 class="px-2 m-0" style="width: 6rem; font-size: 13px; font-family: 'Roboto', sans-serif;">{{$g->category}}</h6>
            <h4 class="px-2 pt-0 mb-0" style="text-align: left; height: 50px; font-family: 'Signika Negative', sans-serif; font-size: 18px; ">{{$g->title}}</h4>
          </div>  
        @endif
      @endforeach
    </div>
    <div style="text-align: center">
      <a class="btn btn-outline-dark" href="/Games" role="button" style="font-family: 'Roboto', sans-serif;">View More</a>
    </div>

    <div style="height: 8rem"></div>

    <p class="h6 my-4 px-3" style="font-family: 'Bungee', cursive; font-size: 36px">Community</p>
    <div class=" rounded mx-3 mb-3">
      <div class="d-flex flex-row flex-wrap justify-content-between py-4">
        @foreach ($forum as $f)
          @if ($loop->index < 8)
            <div class="mb-4 rounded text-break shadow" style="width: 32rem; ">
              <div class="row">
                <div class="col-2 pe-2 pt-1" style="text-align: right">
                  <img src="{{asset('storage/'. $f->member->image)}}" alt="" class="rounded-circle" width="60">
                </div>
                <div class="col-10 ps-1">
                  <p class="mb-0" style="font-size: 14px">{{$f->member->username}}</p>
                  <p class="h6 mb-0" style="font-size: 18px; font-family: 'Signika Negative', sans-serif;">{{$f->title}}</p>
                  <p class="h6 mb-2 mb-0 text-secondary" style="font-size: 14px;">{{$f->date_created}}</p>
                </div>
              </div>
              <p class="px-2" style="font-size: 14px">{{Str::limit($f->excerpt, 120, '...')  }}</p>
            </div>
          @endif
          
        @endforeach
      </div>
      <div style="text-align: center">
        <a class="btn btn-outline-dark mb-3" href="#" role="button" style="font-family: 'Roboto', sans-serif;">View More</a>
      </div>
    </div>
  
    

    <div style="height: 8rem"></div>

    <p class="h6 my-4 px-3" style="font-family: 'Bungee', cursive; font-size: 36px">News</p>
    <div class="d-flex flex-wrap flex-column">
      @if (count($news))
        @foreach ($news as $n)
          @if($loop->index < 6)
            <div class="row mx-2 mb-3">
              <div class="col-3 py-2" style="text-align: center">
                <img src="{{asset('storage/'. $n->image)}}" alt="" class="rounded mb-2" style="height: 10rem; width: 16rem">
              </div>
              <div class="col-9 px-2">
                <p class="h6 mb-0 px-0 w-75" style="font-size: 20px; font-family: 'Signika Negative', sans-serif;">{{$n->title}}</p>
                <p class="px-0" style="font-size: 14px; height: 3rem; width: 30rem">{{Str::limit(strip_tags($n->description), 150, '...')}}</p>
                <a class="btn btn-outline-dark px-2 mt-1" href="#" role="button" style="font-size: 12px">View Detail</a>
              </div>
            </div>
          @endif
        @endforeach
      @endif
    </div>
    <div style="text-align: center; margin-bottom: 8rem">
      <a class="btn btn-outline-dark" href="#" role="button" style="font-family: 'Roboto', sans-serif;">View More</a>
    </div>
  </div>
@endsection