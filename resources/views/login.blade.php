@extends('layout')

@section('main')

<div class="row justify-content-center">
    <div class="col-lg-5 position-absolute top-50 start-50 translate-middle">
        <main class="form-signin w-100 m-auto">
            @if (session()->has('success'))
            <div class="alert my-2 alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert my-2 alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <div class="form-floating">
                    <input type="email"
                        class="form-control rounded-top @error('email') is-invalid rounded mt-3 @enderror" name="email"
                        id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                    <label for="email">Email address</label>
                    <div class="invalid-feedback">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid rounded mt-3 @enderror"
                        name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <div class="invalid-feedback">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Login</button>
            </form>
            <small>Not Registered? <a href="/register">Register</a></small>
        </main>
    </div>
</div>


@endsection