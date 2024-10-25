{{-- <button type="{{$type}}">Submit</button> --}}

{{-- <button type="{{$type}}">Submit</button> --}}


<!--ATTRIBUTES VARIABLE-->
<button

{{-- {{$attributes->class(['up', 'right', 'left'])}} --}}
{{-- {{$attributes->merge(['class'=>'up right left', 'id'=> 'ionut'])}} --}}

type="{{$type}}"
>
{{-- {{gettype($attributes)}} --}}
    @foreach ($attributes as $attribute=>$value)
       {{$changeClass($value)}}
    @endforeach

</button>