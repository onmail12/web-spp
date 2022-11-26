@extends('layout')

@section('main')

<main class="form-signin w-100 m-auto position-absolute top-50 start-50 translate-middle">
    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
    <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid rounded mt-3 @enderror" name="name" id="name"
                placeholder="Enter Name" value="{{old('name')}}" autofocus required>
            <label for="name">Name</label>
            <div class="invalid-feedback">
                @error('name')
                {{ $message }}
                @enderror
            </div>

        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid rounded mt-3 @enderror" name="email"
                id="email" placeholder="name@example.com" value="{{old('email')}}" required>
            <label for="email">Email address</label>
            <div class="invalid-feedback">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid rounded mt-3 @enderror" name="password"
                id="password" placeholder="Password" required>
            <label for="password">Password</label>
            <div class="invalid-feedback">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Register</button>
        <small>Already Registered? <a href="/login">Login</a></small>
    </form>
</main>
@endsection