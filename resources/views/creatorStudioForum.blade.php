@extends('layouts.main')
@section('content')
    @include('partials.creatorStudioNavbar')
    <section class="container mx-auto mt-lg-5 px-4" style="margin-bottom: 8rem">
        @foreach ($forums as $f)
            <div class="container my-4" style="border: solid; border-radius: 10px; border-width: 1px; border-color: grey; height: 11rem;">
                <div class="row my-2 px-3 py-2">
                    <div class="col-10 ps-4">
                        <div class="pe-4">
                            <h4 class="mb-0" style="font-family: 'Signika Negative', sans-serif;">{{$f->title}}</h4>
                            <div class="row justify-content-start my-0" style="font-family: 'Signika Negative', sans-serif;">
                                <div class="col-3 text-secondary ">
                                    <p class="mb-1 ">Created : {{$f->date_created}}</p>
                                </div>
                                <div class="col-4 my-0 text-secondary">
                                    <p class="mb-1 ">Last Modified : {{$f->date_updated}}</p>
                                </div>
                            </div>
                            <p class="mb-0">{{$f->excerpt}}</p>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <a class=" btn btn-secondary my-2 mx-0" href="/CreatorStudio/Forums/ForumDetail/{{$f->id}}" role="button "
                            style="font-size:14px; width:5rem; font-family: 'Roboto', sans-serif;">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mb-4">
            {{ $forums->links() }}
        </div>
    </section>
@endsection