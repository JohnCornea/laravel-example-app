@extends('layouts.master');

@section('title')
    Users Index
@endsection

@section('content')
    

    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center">Users</h1>
            <form method="post" action="{{route('users.update', $user->id)}}">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" value="{{$user->name}}" type="text" class="form-control @error('name') is-invalid @enderror"  id="name" aria-describedby="nameInput">
                    @error('name')
                    <div id="nameInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" value="{{$user->email}}" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailInput">
                    @error('email')
                    <div id="emailInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>    
                    <input value="{{$user->password}}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="passwordInput">
                    @error('password')
                    <div id="passwordInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="passwordConfirm" class="form-label">Confirm Password</label>    
                    <input value="{{$user->password}}" name="password_confirmation" name="email" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="passwordConfirm" aria-describedby="passwordConfirmInput">
                    @error('password_confirmation')
                    <div id="passwordConfirmationInput" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>    
                    <input value="{{\Carbon\Carbon::parse($user->created_at)->format('Y-m-d')}}" name="created_at" type="date" class="form-control" id="date" aria-describedby="dateInput">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Users View');
        
    </script>
@endsection