@extends('components/layout')
@section('content')
    <section class="index-login">
        <p>Hi there! Please sign up to enjoy the full usage of ''. Sign up form is right DOWN HERE. </p>
            <div class="index-login-signup">
                <p>Don't have an account yet? Sign up here!</p>
                <form action="{{ route('submitSignUp') }}" method="post">
                    @csrf
                    <input type="text" name="name" value="Username">
                    <input type="password" name="password" value="Password">
                    <input type="password" name="password-repeat" value="Repeat password">
                    <input type="text" name="email" value="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
        </div>
        <br>
        <hr>
        <div class="index-login-login">
            <p>Have an account? Login here!</p>
            <form action="{{ route('submitLogin') }}" method="post">
                @csrf
                <input type="text" name="name" value="Username">
                @error('name')
                <li>{{ $message }}</li>
                @enderror
                <input type="password" name="password" value="Password">
                @error('password')
                <li>{{ $message }}</li>
                @enderror
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </section>
    <a href="{{ route('home') }}">Home</a>
@endsection