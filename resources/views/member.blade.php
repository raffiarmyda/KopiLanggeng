@extends('layouts.main')
@section('container')
    <div class="container">
        <h1 class="menu">OUR MEMBER</h1>
        @foreach($members as $m)
            <h3 class="p1">Name :{{$m->name}}</h3>
            <h4 class="p2">Email {{$m->email}}</h4>
        @endforeach
    </div>
@endsection
