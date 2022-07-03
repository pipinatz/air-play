@extends('layouts.main')
@section('content')
    @include('partials.creatorStudioNavbar')
    <section class="container mx-auto mt-lg-5 px-5" style="margin-bottom: 8rem">
        <h3 style="font-family: 'Bungee', cursive;">Publishing Forum</h3>
        <div class="mt-lg-4">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There is something wrong when creating new forum
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="/CreatorStudio/Forum/CreateForum">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name='title' class="form-control @error('title') is-invalid @enderror" id="floatingTitle"  value="{{old('title')}}"/>
                    <label for="floatingTitle">Title</label>
                    @error('title')
                        <div class="invalid-feedback ps-2">
                            Title should be 5 - 24 character
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="description" type="hidden" name="description" class="@error('description') is-invalid @enderror" value="{{old('description')}}">
                    <trix-editor input="description" placeholder="Forum Descrption"></trix-editor>   
                    @error('description')
                      <div class="invalid-feedback ps-2">
                        Forum description cannot be empty
                      </div>
                    @enderror
                  </div>
                <div class="container pe-0" style="text-align: right;">
                    <button type="submit" class="btn btn-secondary" style="font-family: 'Roboto', sans-serif; ">Publish</button>
                </div>
            </form>
        </div>
    </section>
@endsection