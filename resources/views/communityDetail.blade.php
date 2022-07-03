@extends('layouts.main')
@section('content')
    <section class="row mx-auto">
        <div class="col-1"></div>
        <div class="col-8 border-end border-start " style="padding-bottom: 8rem">
            <div class="px-5 mt-4">
                <div class="px-3 py-2">
                    <h3 class="mb-1" style="font-size: 28px">{{$forum->title}}</h3>
                    <div class="row justify-content-start">
                        <div class="col-3 text-secondary ">
                            <p>Created : {{$forum->date_created}}</p>
                        </div>
                        <div class="col-4 text-secondary">
                            <p>Last Modified : {{$forum->date_updated}}</p>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="mb-3">
                        <p class="my-3" style="text-align: justify">{!!$forum->description!!}</p>
                    </div>
                    <br>
                    <div class="card bg-light p-2 mb-3" style="width: 14rem;">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <div>
                                    <img src="{{asset('storage/'. $forum->member->image)}}" alt="" width="64" class="rounded" 
                                    height="64" style="background-size: contain; background-repeat: no-repeat;">
                                </div>
                            </div>
                            <div class="col">
                                <h6>{{$forum->member->username}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="w-75 mt-5" style="margin-bottom: 200px;">
                <div >
                    <div class="container">
                        <p>{{$forum->comment->count()}} Comments</p>
                        <br>
                        @foreach ($comments as $c)
                            <div class="col">
                                <div class="row mb-2">
                                    <div class="d-flex">
                                        <div class="pe-2">
                                            <img src="{{asset('storage/'. $c->member->image)}}" alt="" width="32" height="32" class="rounded"
                                            style="background-size: contain; background-repeat: no-repeat;">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">{{$c->member->username}}</h6>
                                        </div>
                                        @if ($c->member->id == session()->get('userID'))
                                            <div class="ms-auto">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#ModalforUpdate" style="font-family: 'Roboto', sans-serif; font-size: 13px">
                                                    Update
                                                </button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="ModalforUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Comment</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/Community/Forum/UpdateComment/{{$c->id}}" method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                                                                        <textarea class="form-control" name='newComment' id="exampleFormControlTextarea1" rows="3" required>{{$c->comment}}</textarea>
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
                                                <button type="button" class="btn btn-light border btn-sm" data-bs-toggle="modal" data-bs-target="#ModalforDelete" style="font-family: 'Roboto', sans-serif; font-size: 13px">
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
                                                        <form action="/Community/Forum/DeleteComment/{{$c->id}}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                You are going to delete your comment, delete comment?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" style="font-family: 'Roboto', sans-serif;">Close</button>
                                                            <button type="submit" class="btn btn-light btn-sm border" style="font-family: 'Roboto', sans-serif;">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <p style="text-align: justify;">{{$c->comment}}</p>
                            </div>
                            <hr style="margin-top: 2rem; margin-bottom: 2rem;">    
                        @endforeach  
        
                        <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem;">
                            {{ $comments->links() }}
                        </div>

                        @if (session()->has('commentSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('commentSuccess')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('updateCommentSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('updateCommentSuccess')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif 
                        @if (session()->has('deleteCommentSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('deleteCommentSuccess')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif   
                        @if (Auth::check())
                            @error('comment')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    There is something wrong with your comment
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <form action="/Community/Forum/CreateComment/{{$forum->id}}" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" id="floatingTextarea" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Comment</label>
                                    @error('comment')
                                        <div class="invalid-feedback ps-2">
                                            Comment cannot be empty
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-secondary mt-2" style="font-family: 'Roboto', sans-serif;">
                                    Submit
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </section>

        </div>
        
        
        <div class="col-3">
            <p class="h6 mb-2" style="font-family: 'Staatliches', cursive; font-size: 18px; margin-top: 20rem">Read more forum</p>
            @foreach ($suggestion as $s)
                <div class="border shadow-sm w-75 mb-4 p-2 d-block rounded">
                    <p class="h6" style="font-size: 13px; text-align: justify; color: black">
                        {{$s->title}}
                    </p>
                    <a href="/Community/Forum/{{$s->id}}"  class="btn btn-outline-dark p-1 btn-sm" href="#" role="button" style="font-size: 12px; font-family: 'Roboto', sans-serif;">View Detail</a>
                </div>
            @endforeach
        </div>
    </section>

    
@endsection