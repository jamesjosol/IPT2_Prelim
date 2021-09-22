@extends('base')

@section('content')

<div class="mt-5 text-center">
    <div class="container text-white pt-5">
        <h1 class="font-weight-light">Welcome All!</h1>
        <h5 class="font-weight-light mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus omnis placeat ipsa nihil, quo non, similique libero atque odit eaque ad veritatis debitis dolorem aliquid, aspernatur repellendus? Ipsum, recusandae labore!</h5>
        @if (!Auth::check())
            <a href="{{url('/register')}}" class="btn index-btn mt-5 font-weight-light">Register Now!</a>
        @endif
    </div>
</div>
@stop
