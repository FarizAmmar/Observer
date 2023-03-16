@extends('layouts.app')

@section('content')
{{-- Notification Failed Login --}}
@if (session()->has('loginFailed'))
<div class="container-fluid" style="position: fixed; margin-top:20px;">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed to login!!</strong> {{ session('loginFailed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<div class=" login d-flex justify-content-between">

    {{-- View Right --}}
    <div class="login-left h-100 w-100">

        {{-- Logo --}}
        <div class="row">
            <div class="col-6">
                <div class="header d-flex align-items-center p-3">
                    <img class="brand" src="img/Observer-None.png" alt="logo">
                    <span class="text-header px-2">
                        Observer.
                    </span>
                </div>
            </div>
        </div>

        {{-- Header --}}
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-6">
                <h3>Welcome back</h3>
                <p>Welcome back, please enter your details.</p>
            </div>
        </div>

        {{-- Input Login --}}
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-6">
                <div class="body">
                    <form action="/" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control shadow-sm bg-body" name="username" id="username"
                                value="{{ old('username') }}" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-5">
                            <label for="passwd" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-sm bg-body" name="password" id="password"
                                placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primer w-100">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Input Login --}}

    </div>
    {{-- End View Left --}}

    {{-- Image Right --}}
    <div class="login-right w-100 h-100 d-none d-md-block" style="background-image: url('img/siluet.jpg');">
        <div class="h-100 d-flex align-items-end">
            <div class="container h-75 pt-5">
                <div class="d-flex justify-content-start align-items-center ms-4 mt-5">
                    <h1 class="glowing-text text-white">We are</h1>
                </div>
                <div class="d-flex justify-content-start align-items-center ms-4">
                    <h1 style="color: white;">Observing a new idea.</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- End Image --}}

</div>
@endsection
