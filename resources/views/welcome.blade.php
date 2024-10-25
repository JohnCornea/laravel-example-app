<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- <form action="/posts/1" method="post">
        @csrf
        @method('PATCH')
        <button type="submit">Update</button>
    </form> --}}
    {{-- <form action="/colors" method="POST">
        @csrf
        <input type="text" name="colors[]" value="blue">
        <input type="text" name="colors[]" value="green">
        <input type="text" name="colors[]" value="red">
        <input type="text" name="colors[]" value="yellow">
        <button type="submit">Go</button>
    </form> --}}
    {{-- <form action="/date" method="POST">
        @csrf
        <input type="date" name="appointment">
        <button type="submit">Submit</button>
    </form> --}}
    {{-- <div class="container">
        <div class="col-4">
        <form action="/flash" method="post">
            @csrf
            <div class="mb-3 mt-4">
              <label  for="exampleInputEmail1" class="form-label">Email address</label>
              <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            {{old('email')}}
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input name="checkBox" type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div> --}}

    <!-- CODE FOR FLASHED DATA REDIRECTION -->
    {{-- @if (session('user'))
      <div>
        <h1>Welcome Mr. {{session('user')}}</h1>
      </div>
    @endif --}}

    <!-- Returning and consuming JSON Data -->
    
    <!--Blade IF statements using DIRECTIVES -->
      {{-- @if ($count === 20)
        <h2>It is equal to 20</h2>
       @else
        <h2>It is NOT equal to 20</h2>
      @endif

      @unless ($count === 0)
      <h2>It is FALSE</h2>
      @endunless

      @isset($count)
        <h2>It is set???</h2>
      @endisset

      @empty(!$count)
        <h2>It is empty</h2>
      @endempty --}}

      <!-- Switch -->
      {{-- @switch($count)
        @case(10)
          <h2>It is 10</h2>
          @break

        @case(20)
          <h2>It is 20</h2>
          @break

        @case(30)
          <h2>It is 30</h2>
          @break

        @default
          <h2>Default value here!</h2>
      @endswitch --}}

      <!-- Loops -->
      {{-- @for ($count = 0; $count < 10; $count++)
        <h2>Current loop iteration: {{ $count }}</h2>  
      @endfor --}}

      {{-- @while ($count < 10)
        {{ $count++ }}
      @endwhile --}}

      {{-- @foreach ( $users as $user)
        {{$user[2]}}
      @endforeach --}}
{{-- 
      @forelse ($users as $user)
        {{$user[1]}}
      @empty
        <p>no users</p>
      @endforelse --}}

      {{-- @foreach ($datas as $data) --}}
      
        {{-- @if ($data == 2) --}}
          {{-- @continue --}}
          {{-- @break
        @endif --}}
      {{-- @break ($data == 2)
        {{$data}}
      @endforeach --}}

      {{-- @foreach ($datas as $data)
        @if ($loop->first)
          hey I am {{$data}}
          <br>
        @endif
        @if ($loop->even)
          hey I am EVEN{{$data}}
          <br>
        @endif
        @if ($loop->odd)
        hey I am ODD{{$data}}
        <br>
      @endif
        @if ($loop->last)
          hey I am {{$data}}
        @endif
      @endforeach --}}

      <!--NESTED LOOP DATA-->
      {{-- @foreach ($datas as $data)
        @foreach ($datas as $data)
            {{$loop->parent->first}}
        @endforeach
      @endforeach --}}
      
      <!--CSS CONDITIONAL CLASSES-->
      {{-- @php
        $isActive = true;
        $isNotActive = false;
      @endphp

      <style>
        .blue {
          color: blue;
        }
        .red {
          color: red;
        }
      </style>

      <div @class(['red' => $isActive])>
        <!--CONDITIONAL STYLES-->
        <p @style(['background: black' => $isActive])>Hey dear student</p>
      </div> --}}

      <!--BLADE INCLUDE DIRECTIVE-->
      {{-- @php
        $booleanValue = false;
      @endphp
      
      @foreach ($datas as $data)
        @include('nav', ['extra' => 'this is extra data'])
        @includeIf('nav', ['extra' => 'extra data'])
        @includeWhen($booleanValue, 'list', ['extra' => 'this is extra dataaaa'])
        @includeUnless($booleanValue, 'list', ['extra' => 'this is extra dataaaa'])
        @includeFirst(['nav', 'welcome', 'list'], ['extra' => 'this is extra dataaaa'])

      @endforeach --}}

      <!--Combining loop and variables iteration in one line-->
      <!--1st view, 2nd looping through the array, 3rd variable, 4th view-->
      {{-- @each('list', $datas, 'data', 'empty') --}}
      
      <!--BLADE MASTER LAYOUT CONFIG-->
      {{-- @extends('layouts.master')
      @section('sidebar')
        <h1>Sidebar Welcome View</h1>
      @endsection
      @section('content')
        <h1>Welcome</h1>
        <x-button-component :type="$type"></x-button-component>
      @endsection --}}

      @extends('layouts.master')
      @section('content')

        <h2>Welcome</h2>

        {{-- <x-button-component :$type class="down"></x-button-component> --}}
        {{-- <x-modal-component></x-modal-component> --}}
        {{-- <x-link></x-link> --}}
        
      @endsection

      @vite('resources/js/app.js') 

      <script>
        document.addEventListener('DOMContentLoaded', function() {

          axios.get('/json').then(function(data) {
          console.log(data.data.name);
        });
        });
      </script>
</body>
</html>