@extends('layouts.master')

@section('content')

    {{-- {{$errors}} --}}

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
        {{$errors}}
        @endforeach
    @endif --}}

    <div class="col-6 offset-sm-3 mt-3">
        <h2 class="text-center">Create a Post</h2>
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input value="{{old('title')}}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleFeeedback">
              <div id="titleFeeedback" class="invalid-feedback">
                @error('title')
                   {{$message}} 
                @enderror
              </div>
            </div>
    
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
              <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10" aria-describedby="bodyFeeedback"></textarea>
              <div id="bodyFeeedback" class="invalid-feedback">
                @error('body')
                   {{$message}} 
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

<script>
    // Validation Exception and JSON responses
    document.addEventListener('DOMContentLoaded', function(event){
        axios.post('{{route('posts.store')}}', {title: '', body: ''})
            .then(function(response) {
                console.log(response);
            })
    })
</script>

@endsection
