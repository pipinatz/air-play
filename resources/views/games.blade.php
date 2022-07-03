@extends('layouts.main')
    @section('content')
    <section class="w-100 mx-auto" style="padding-bottom: 8rem; padding-left: 6rem; padding-right: 6rem;">
        <h3 class="mb-3 mt-5" style="text-align: left; font-family: 'Bungee', cursive; font-size: 36px">Game Collection</h3>
        <!-- <div class="d-flex align-content-center align-self-center justify-content-between" style="width: 12rem;">
            <p>Sort By: </p>
            <a class=" btn btn-secondary " href="# " role="button "
                style="font-size:14px; padding: 2px; width:4rem; ">Newest</a>
            <a class="btn btn-secondary " href="# " role="button "
                style="font-size:14px; padding: 2px; width:4rem; ">Oldest</a>
        </div> -->
        <div class="row mt-4">
            <div class="col-2">
                <div class="card shadow-sm" style="width: 12rem; border-width: 1px; border-radius: 5px">
                    <div class="card-body">
                        <h5>Filter</h5>
                        <hr>
                        <p>Platform</p>
                        <div class="row justify-content-around">
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Platform/Windows" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Windows</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Platform/macOS" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">macOS</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Platform/Android" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Android</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Platform/iOS" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">iOS</a>
                        </div>
                        <hr>
                        <p>Genre</p>
                        <div class="row justify-content-around">
                            <a class=" btn btn-outline-secondary  my-1" href="/Games/Genre/Action" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Action</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Adventure" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Adventure</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Horror" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Horror</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Platformer" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Platformer</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Puzzle" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Puzzle</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/RolePlaying" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Role Playing</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Racing" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Racing</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Sport" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Sport</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Simulation" role="button "
                             style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Simulation</a>
                            <a class=" btn btn-outline-secondary my-1" href="/Games/Genre/Strategy" role="button "
                                style="font-size:14px; padding: 2px; width:8rem; font-family: 'Roboto', sans-serif;">Strategy</a>   
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="d-flex flex-row flex-wrap justify-content-start">
                    @foreach ($games as $g)
                    <div class="mx-2 mb-4 rounded text-break border shadow-sm" style="width: 262px">
                        <img src="{{asset('storage/'. $g->image)}}" class="rounded" alt="..."
                            style="height: 12rem; width: 260px;"/>
                        <h4 class="pt-2 px-2 card-title mb-0" style="font-family: 'Signika Negative', sans-serif; font-size: 18px; text-align: left; height: 50px;">{{$g->title}}</h4>
                        <h6 class="px-2 m-0" style="width: 6rem; font-size: 14px; font-family: 'Roboto', sans-serif;">{{$g->category}}</h6>
                        <p class="px-2 ms-0 me-0 mt-0 mb-3" style="font-size: 13px; text-align: justify; height: 60px;">{{$g->excerpt}}</p>
                        <div class="px-2">
                            <a class="btn btn-outline-dark btn-sm" href="/Games/{{$g->id}}" style="font-family: 'Roboto', sans-serif; text-decoration: none">View Detail</a>
                        </div>
                        <p></p>
                    </div>  
                    @endforeach
                </div>
                <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem;">
                    {{ $games->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
