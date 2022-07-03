@extends('layouts.main')
@section('content')
@include('partials.appManagementNavbar')
    <section class="container mx-auto px-4" style="margin-bottom: 8rem">
        @foreach ($news as $n)
            <div class="contaienr my-4" style="border: solid; border-radius: 10px; border-width: 1px; border-color: grey;">
                <div class="row my-2 px-3">
                    <div class="col-3 p-2" style="text-align: center;">
                        <img src="{{ asset('storage/' . $n->image) }}" alt="..." class="rounded"
                            style="width: 16rem; background-color: white; object-fit: contain;" />
                    </div>
                    <div class="col-9 pe-5">
                        <h4 class="mb-0" style="font-family: 'Signika Negative', sans-serif;">{{$n->title}}</h4>
                        <div class="row justify-content-start my-0" style="font-family: 'Signika Negative', sans-serif;">
                            <div class="col-3 text-secondary ">
                                <p class="my-0 ">Created : {{$n->date_created}}</p>
                            </div>
                            <div class="col-4 my-0 text-secondary">
                                <p class="my-0 ">Last Modified : {{$n->date_updated}}</p>
                            </div>
                        </div>
                        <a class=" btn btn-outline-dark my-2 mx-0 btn-sm" href="/AppManagement/News/NewsDetail/{{$n->id}}" role="button "
                            style="font-size:14px; width:5rem; font-family: 'Roboto', sans-serif;">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center my-4">
            {{ $news->links() }}
        </div>
    </section>
@endsection