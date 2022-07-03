@extends('layouts.main')
@section('content')
  <!-- Top Page -->
  <div class="shadow" style="height: 55vh;">
    <div class="row">
      <div class="mx-auto"></div>
      <div class="col-1"></div>
      <div class="col-10">
        <img src="{{asset('storage/'. $news->image)}}" alt="Gambar Banner News"
          style="width: 100%; height: 55vh;" />
      </div>
      <div class="col-1"></div>
    </div>
  </div>
  <div class="container ">
    <div class="col-3">

    </div>
  </div>
  <!-- Content Page -->
  <div class="container mt-3 " style="margin-bottom: 8rem"">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10" style="text-align: justify;">
        <h3 class="my-0" style="text-align: left; font-family: 'Bungee', cursive; font-size: 36px">{{$news->title}}</h3>
        <p>{{$news->date_created}}</p>
        <br />
          <p>{!!$news->description!!}</p>
        <h6 class="my-5">Admin {{$news->admin->username}}</h6>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
@endsection