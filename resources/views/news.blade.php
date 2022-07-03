@extends('layouts.main')
@section('content')
  @if (count($highlight))
    <section class="shadow">
      <div class="container mx-auto">
        <div class="col py-4">
          <div class="row my-4">
            <div class="col">
              <div class="text-center">
                <img src="{{asset('storage/'. $highlight[0]->image)}}" class="rounded" alt="..."
                  style="width: 100%; height: 40vh; background-color: white" />
              </div>
              <div class="mx-auto py-1">
                <p class="text-secondary" style=";font-size: 12px; margin-bottom: 0px;">{{$highlight[0]->date_created}}</p>
                <h3 class="" style="font-size: 24px; font-family: 'Signika Negative', sans-serif;">{{$highlight[0]->title}}</h3>
                <p class="px-0" style="font-size: 14px; height: 3rem;">{{Str::limit(strip_tags($highlight[0]->description), 150, '...')}}</p>
                <p>
                  <a class="btn btn-outline-dark btn-sm border" href="/News/{{$highlight[0]->id}}" style="font-family: 'Roboto', sans-serif;">read more</a>
                </p>
              </div>
            </div>
            <div class="col">
              <div class="text-center">
                <img src="{{asset('storage/'. $highlight[1]->image)}}" class="rounded" alt="..."
                  style="width: 100%; height: 40vh; background-color: white" />
              </div>
              <div class="mx-auto py-1">
                <p class="text-secondary" style="font-size: 12px; margin-bottom: 0px;">{{$highlight[1]->date_created}}</p>
                <h3 class="" style="font-size: 24px; font-family: 'Signika Negative', sans-serif;">{{$highlight[1]->title}}</h3>
                <p class="px-0" style="font-size: 14px; height: 3rem;">{{Str::limit(strip_tags($highlight[1]->description), 150, '...')}}</p>
                <p>
                  <a class="btn btn-outline-dark btn-sm border" href="/News/{{$highlight[1]->id}}" style="font-family: 'Roboto', sans-serif;">read more</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
  
  @if (count($news))
    <section class="container w-75 my-5" style="padding-bottom: 8rem;">
      <div class="d-flex flex-column">
        @foreach ($news->skip(2) as $n)
          <div class="row mb-3">
            <div class="col-4 text-center">
              <img src="{{asset('storage/'. $n->image)}}" class="rounded w-100" alt="..." style="width: auto; height: 10rem;" />
            </div>
            <div class="col-8 ">
              <p style="color: black;font-size: 12px; margin-bottom: 0px;">{{$n->date}}</p>
              <h5 class="mb-0" style="height: 3rem">{{$n->title}}</h5>
              <p class="px-0" style="font-size: 14px; height: 3rem; width: 35rem">{{Str::limit(strip_tags($n->description), 150, '...')}}</p>
              <p><a class="mt-auto mb-3 btn btn-outline-dark btn-sm" href="/News/{{$n->id}}" style="font-family: 'Roboto', sans-serif;">read more</a></p>
            </div>
          </div>
        @endforeach
        <div class="d-flex justify-content-center my-4">
          {{ $news->links() }}
        </div>
        
      </div>
    </section>
  @endif
@endsection