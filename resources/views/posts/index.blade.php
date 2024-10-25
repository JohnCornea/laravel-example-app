@extends('layouts.master')

@section('content')
    POST
    <x-dynamic-component :component="$componentName"></x-dynamic-component>

    <!--1st way-->
    {{-- <x-modal-component buttonColor="primary" modalColor="info" modalType="info" modalTextColor="light">
        <x-slot:buttonText>Save</x-slot:buttonText>
    </x-modal-component>

    <x-modal-component modalTitle="Modal 2" buttonColor="success" modalColor="success" modalType="success" modalTextColor="light">
        <x-slot:buttonText>Update</x-slot>
    </x-modal-component>

    <x-modal-component modalTitle="Modal 1" buttonColor="danger" modalColor="danger" modalType="danger" modalTextColor="light">
        <x-slot:buttonText>Delete</x-slot>
        <x-slot:modalContent>Loreeeeeeeeeeeeeeeeeeeem Ipsuuuuuuuuuuuuum</x-slot>
    </x-modal-component> --}}

    <!--2nd way-->
    {{-- <x-modal-component>
        @slot('buttonText')
            Danger
        @endslot
    </x-modal-component> --}}

    <!--3rd way-->
    {{-- <x-modal-component>
        <x-slot name="buttonText">Delete</x-slot>
    </x-modal-component> --}}
@endsection