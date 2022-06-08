@extends('layouts.main')
@section('container')
    <div class="container">
        <h1 class="menu">OUR MENU</h1>
        <div class="menu">
            <a class="menu" href="{{route('add menu')}}">add menu</a>
        </div>
        @foreach($menus as $m)
        <h3 class="p1">{{$m->menu_name}}</h3>
        <h4 class="p2">{{$m->menu_description}}</h4>
        @endforeach
    </div>
@endsection
