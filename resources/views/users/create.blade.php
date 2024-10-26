@extends('layouts.master');

@section('title')
    Create User
@endsection

@section('content')


    

    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center">Create Users</h1>
            <form method="post" action="{{route('users.store')}}">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror"  id="name" aria-describedby="nameInput">
                    @error('name')
                    <div id="nameInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{old('email')}}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailInput">
                    @error('email')
                    <div id="emailInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>    
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="passwordInput">
                    @error('password')
                    <div id="passwordInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="passwordConfirm" class="form-label">Confirm Password</label>    
                    <input name="password_confirmation" name="email" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="passwordConfirm" aria-describedby="passwordConfirmInput">
                    @error('password_confirmation')
                    <div id="passwordConfirmationInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="date" class="form-label">Date</label>    
                    <input name="created_at" type="date" class="form-control @error('created_at') is-invalid @enderror" id="date" aria-describedby="dateInput">
                    @error('created_at')
                    <div id="dateInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Users View');
        
    </script>
@endsection