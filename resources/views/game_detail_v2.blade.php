@extends('layouts.main')
@section('content')
    <div class="container ">
        <div class="row">
            {{-- Main Content --}}
            <div class="col-10 border-start border-end " style="padding-bottom: 8rem">
                {{-- Game Banner --}}
                <div class="mb-4 mt-4 mx-auto px-4">
                    <img src="{{ asset('storage/' . $game->image) }}" class="rounded mb-3"alt="" style="width: 55rem; height: 30rem;"><br><br>
                    <p class="h3" style="font-family: 'Bungee', cursive;">{{$game->title}}</p>
                    <p class="mb-3" style="font-family: 'Manrope', sans-serif;">{!! $game->description !!}</p><br>
                </div>
                
                <div class="mb-4 px-4">
                    <div class="row">
                        <div class="col-2">
                            <p class="h6 mb-0 ps-2" style="font-family: 'Staatliches', cursive; font-size: 20px"> Developer </p>
                        </div>
                        <div class="col-10">
                            <p class="h6 mb-0">{{$game->Member->developerAlias}}</p>
                        </div>
                    </div>

                    <hr class="w-50 mt-0">

                    <div class="row">
                        <div class="col-2">
                            <p class="h6 mb-0 ps-2" style="font-family: 'Staatliches', cursive; font-size: 20px"> Initial Date </p>
                        </div>
                        <div class="col-10">
                            <p class="h6 mb-0">{{$game->date_updated}}</p>
                        </div>
                    </div>

                    <hr class="w-50 mt-0">

                    <div class="row ">
                        <div class="col-2">
                            <p class="h6 mb-0 ps-2" style="font-family: 'Staatliches', cursive; font-size: 20px">Last Update</p>
                        </div>
                        <div class="col-10">
                            <p class="h6 mb-0">{{$game->date_updated}}</p>
                        </div>
                    </div>
                    <hr class="w-50 mt-0">
                    <br>
                </div>
                
                <div class="mb-4 px-4">
                    <p class="h3" style=" font-family: 'Bungee', cursive;">Specifications</p>
                    <div class="shadow">
                        <div class="row">
                            <div class="bg-light py-2" style="border-radius: 10px;">
                                <div class="row mt-3 mx-2">
                                    <div class="col-6 judulSpekc">
                                        <h4 >Minimum</h4>
                                    </div>
                                    <div class="col-6 judulSpekc">
                                        <h4 >Recommended</h4>
                                    </div>
                                </div>
                                <div class="row mt-3 mx-2">
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Operating system</span> <br />
                                        {{ $game->minimumOS }}
                                    </div>
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Operating system</span><br />
                                        {{ $game->recommendedOS }}
                                    </div>
                                </div>
                                <div class="row mt-5 mx-2">
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Processor</span><br />
                                        {{ $game->minimumProcessor }}
                                    </div>
                                    <div class="col-6 ">
                                        <span class="judulSpekc fw-bolder">Processor</span><br />
                                        {{ $game->recommendedProcessor }}
                                    </div>
                                </div>
                                <div class="row mt-5 mx-2">
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Memory</span><br />
                                        {{ $game->minimumMemory }}
                                    </div>
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Memory</span><br />
                                        {{ $game->recommendedMemory }}
                                    </div>
                                </div>
                                <div class="row mt-5 mx-2">
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Storage</span><br />
                                        {{ $game->minimumStorage }}
                                    </div>
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Storage</span><br />
                                        {{ $game->recommendedStorage }}
                                    </div>
                                </div>
                                <div class="row mt-5 pb-5 mx-2">
                                    <div class="col-6"> 
                                        <span class="judulSpekc fw-bolder">Graphic Card </span><br />
                                        {{ $game->minimumGraphic }}
                                    </div>
                                    <div class="col-6">
                                        <span class="judulSpekc fw-bolder">Graphic Card</span><br />
                                        {{ $game->recommendedGraphic }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3" style="margin-top: 8rem">
                    <p class="h3 px-3" style=" font-family: 'Bungee', cursive;">Review</p>
                    <p class="px-3">{{count($review)}} review</p>
                    @foreach ($review as $r)
                    <div class="col">
                        <div class="row mb-2">
                            <div class="d-flex">
                                <div class="p-2">
                                    <img src="../asset icon/1.jpg" alt="" width="32" height="32"
                                    style="background-size: contain; background-repeat: no-repeat;">
                                </div>
                                <div>
                                    <h6 class="mb-0">{{$r->member->username}}</h6>
                                    <p class="mb-0">Created : {{$r->date}}</p>
                                </div>
                                @if ($r->member->id == session()->get('userID'))
                                    {{-- {{dd(session()->all())}} --}}
                                    <div class="ms-auto">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalforUpdate">
                                            Update
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalforUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Review</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Games/UpdateReview/{{$r->id}}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                                                                <textarea class="form-control" name='review' id="exampleFormControlTextarea1" rows="3" required>{{$r->review}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <input class="btn" type="button" value="Delete"> --}}

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#ModalforDelete">
                                            Delete
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalforDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Comment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/Games/DeleteReview/{{$r->id}}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        You are going to delete your review, are you sure?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        {{-- <input class="btn" type="button" value="Delete"> --}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <p class="ps-2" style="text-align: justify;">{{$r->review}}</p>
                    </div>
                    <hr style="margin-top: 2rem; margin-bottom: 2rem;">    
                    @endforeach 

                    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem;">
                        {{ $review->links() }}
                    </div>
                    
                    @if (Auth::check())
                        <form action="/Games/{{$game->id}}" method="POST">
                            @csrf
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @error('review')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    There is something wrong with your comment
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <br>
                            <div class="form-floating px-2">
                                <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="floatingTextarea" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Review</label>
                                @error('review')
                                    <div class="invalid-feedback ps-2">
                                        Review cannot be empty
                                    </div>
                                @enderror
                            </div>
                            <div class="px-2">
                                <button type="submit" class="btn btn-secondary mt-2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            {{-- Download / Donate Button --}}
            <div class="col-2">
                <div class="sticky-top" style="margin-top: 26rem">
                    <div class="mb-2">
                        <a class="btn btn-dark" href="{{$game->game}}" target="_blank" role="button" style="width: 10rem; font-family: 'Roboto', sans-serif;">DONATE</a>
                    </div>
                    <div class="mb-2">
                        <a class="btn btn-outline-dark" href="#" role="button" style="width: 10rem; font-family: 'Roboto', sans-serif;">DOWNLOAD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
