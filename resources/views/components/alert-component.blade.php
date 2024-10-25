@props(['type'=> 'info', 'message'])

<!--To pass data from a parent component it's impossible, you can only make your component aware of it-->
@aware(['master'])

<div class="alert alert-{{$type}}" role="alert">
    <div class="text-center">{{$master}}</div>
</div>