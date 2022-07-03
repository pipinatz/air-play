@extends('layouts.main')
    @section('content')
    <section class="row mx-auto">
        <div class="col-2"></div>
        @if (count($forums))
            <div class="col-8 border-start border-end" style="padding-bottom: 8rem">
                @foreach ($forums as $f)
                    <div class="col mt-4 px-5">
                        <div class="px-1">
                            <div class="card-body pb-0">
                                <div class="row mx-1 mb-0">
                                    <div class="col-2 rounded" style="width: 4rem; height: 3rem; text-align: center">
                                        <img src="{{asset('storage/'. $f->member->image)}}" alt="" class="rounded-circle" style=" object-fit: cover; width: 3rem; height: 3rem;">
                                    </div>
                                    <div class="col-10 ms-0 ps-1">
                                        <p class="mb-0 h6" style="font-size: 16px">{{$f->member->username}}</p>
                                        <p class="mb-0" style="font-size: 12px;">{{$f->date_created}}</p>
                                    </div>
                                </div>
                                <div class="m-2">
                                    <h3 class="px-2" style="font-size: 24px">{{$f->title}}</h3>
                                    <p class="px-2" style="text-align: justify">{{$f->excerpt}}</p>
                                    <br><br>
                                    <p class="px-2 mb-1">{{$f->comment->count()}} Comments</p>
                                    <div class="d-flex align-self-center bd-highlight">
                                        {{-- <div class="p-2 mx-2 rounded align-self-center bd-highlight bg-secondary">{{$f->tag}}</div> --}}
                                        <div class="ms-auto p-2 bd-highlight"><a class="btn btn-primary" href="/Community/Forum/{{$f->id}}" role="button" style="font-family: 'Roboto', sans-serif;">Read More</a></div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center my-4">
                    {{ $forums->links() }}
                </div>
            </div>
        @endif
        <div class="col-2"></div>
    </section>
    @endsection