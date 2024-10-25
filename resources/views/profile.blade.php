{{-- @extends('layouts.master')
@section('content')

<div>
    <h1>Profile view</h1>
    {{ $user->utilizator }} connected
</div>

@endsection --}}

<!--Master variable-->
@props(['master'=> 'I am the master'])
<!-- NEW SYNTAX -->
<x-master title="PROFILE TITLE">
    {{$master}}
</x-master>