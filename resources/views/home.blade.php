@extends('layouts.main')
@section('container')
    <div class="description">
        <h2> Welcome To</h2>
        <h1>langgeng coffee</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorempor
            incididunt ut labore et dolore magna aliqua. </p>
        <form method="get" action="{{route('menu')}}">
            <button>See Our Menu</button>
        </form>
    </div>
@endsection
