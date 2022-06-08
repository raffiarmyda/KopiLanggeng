@extends('layouts.main')
@section('container')
    <h1 class="menu">Sign Up</h1>
    <div class="container">
        <form method="post" action="{{route('add_account')}}">
            @csrf
            <div class="form-group">
                <label for="name" style="color: white">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Lengkap" value="{{old('name')}}">
                @error('name')<div class="invalid-feedback">{{$messages='Mohon Mengisi Nama'}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" style="color: white">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" value="{{old('email')}}">
                @error('email')<div class="invalid-feedback">{{$messages='Harap Masukkan Format Email Dengan Benar Atau Email Sudah Digunakan'}}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username" style="color: white">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" value="{{old('username')}}">
                    @error('username')<div class="invalid-feedback">{{$messages='Username Tidak Boleh Kosong Atau Username Sudah Digunakan'}}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password" style="color: white">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" value="{{old('password')}}">
                    @error('password')<div class="invalid-feedback">{{$messages='Password Tidak Boleh Kosong'}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="role" style="color: white">Role</label>
                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" >
                        <option selected hidden value="">-Pilih Role-</option>
                        <option value="User" selected>User</option>
                        <option value="Admin" disabled>Admin</option>
                    </select>
                    @error('role')<div class="invalid-feedback">{{$messages='Role Tidak Boleh Kosong'}}</div>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection
