@extends('layouts.main')
@section('content')
@include('partials.creatorStudioNavbar')
    <section class="container mx-auto mt-lg-5 px-5" style="margin-bottom: 8rem">
        <h3 style="font-family: 'Bungee', cursive;">Forum Information</h3>
        <div class="mt-lg-4">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There is something wrong when creating new forum
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="/CreatorStudio/Forum/UpdateForum/{{$forum->id}}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name='title' class="form-control @error('title') is-invalid @enderror" id="floatingTitle"  value="{{old('title', $forum->title)}}"/>
                    <label for="floatingTitle">Title</label>
                    @error('title')
                        <div class="invalid-feedback ps-2">
                            Title should be 5 - 24 character
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="description" type="hidden" name="description" class="@error('description') is-invalid @enderror" value="{{old('title', $forum->description)}}">
                    <trix-editor input="description" placeholder="Game Descrption"></trix-editor>   
                    @error('description')
                      <div class="invalid-feedback ps-2">
                        Forum description cannot be empty
                      </div>
                    @enderror
                </div>

                <div class="container px-0 mb-3" style="text-align: right;">
                    <button type="submit" class="btn btn-secondary" style="width: 5rem; font-family: 'Roboto', sans-serif;">Save</button>
                </div>
            </form>
            <div class="d-flex flex-row-reverse ">
              <form action="/CreatorStudio/Forum/DeleteForum/{{$forum->id}}" method="POST">
                @csrf
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 5rem;" style="font-family: 'Roboto', sans-serif;">
                  Delete
                </button>
  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Permission</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        You are going to delete your forum, delete now?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style="font-family: 'Roboto', sans-serif;">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </section>
@endsection