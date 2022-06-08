@extends('layouts.main')
@section('container')
    <h1 class="menu">Add Menu</h1>
    <div class="container">
        <form method="post" action="{{route('add_menu')}}">
            @csrf
            <div class="form-group">
                <label for="menu_name" style="color: white">Menu Name</label>
                <input type="text" class="form-control @error('menu_name') is-invalid @enderror" name="menu_name" id="menu_name" placeholder="Enter Menu Name" value="{{old('menu_name')}}">
                @error('menu_name')<div class="invalid-feedback">{{$messages='Mohon Mengisi Nama Menu Atau Nama Menu Sudah Digunakan'}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="menu_description" style="color: white">Menu Description</label>
                <input type="text" class="form-control @error('menu_description') is-invalid @enderror" name="menu_description" id="menu_description" placeholder="Enter Menu Description" value="{{old('menu_description')}}">
                @error('menu_description')<div class="invalid-feedback">{{$messages='Mohon Mengisi Menu Description'}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="menu_category" style="color: white">Menu Category</label>
                <input type="text" class="form-control @error('menu_category') is-invalid @enderror" name="menu_category" id="menu_category" placeholder="Enter Menu Category" value="{{old('menu_category')}}">
                @error('menu_category')<div class="invalid-feedback">{{$messages='Mohon Mengisi Menu Category'}}</div>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
