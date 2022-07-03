@extends('layouts.main')
@section('content')
    @include('partials.creatorStudioNavbar')
    <section class="container mx-auto mt-lg-5 px-4" style="margin-bottom: 8rem">
        @foreach ($games as $g)
            <div class="contaienr my-4" style="border: solid; border-radius: 10px; border-width: 1px; border-color: grey;">
                <div class="row my-2 px-3">
                    <div class="col-3 p-2" style="text-align: center;">
                        <img src="{{ asset('storage/' . $g->image) }}" alt="..." class="rounded"
                            style="height: 10rem; width: 16rem;  background-color: white;" />
                    </div>
                    <div class="col-9">
                        <h4 class="mb-0" style="font-family: 'Signika Negative', sans-serif;">{{$g->title}}</h4>
                        <div class="row justify-content-start my-0" style="font-family: 'Signika Negative', sans-serif;">
                            <div class="col-3 text-secondary ">
                                <p class="my-0 ">Created : {{$g->date_created}}</p>
                            </div>
                            <div class="col-4 my-0 text-secondary">
                                <p class="my-0 ">Last Modified : {{$g->date_updated}}</p>
                            </div>
                        </div>
                        <p class="my-1" style="width: 40rem">{{$g->excerpt}}</p>
                        <a class=" btn btn-secondary my-2 mx-0" href="/CreatorStudio/Games/GameDetail/{{$g->id}}" role="button "
                            style="font-size:14px; width:5rem; font-family: 'Roboto', sans-serif;">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center my-4">
            {{ $games->links() }}
        </div>
    </section>
@endsection