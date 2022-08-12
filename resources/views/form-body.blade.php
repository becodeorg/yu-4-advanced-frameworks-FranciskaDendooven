@extends('components/layout')
@section('content')
        <div class="index-home">
        <div class="login-form">
            <p>Welcome back! Login here!</p>
            <form action="{{ route('submitLogin') }}" method="post">
                @csrf
                <input type="text" name="name" value="Username">
                @error('name')
                <li>{{ $message }}</li>
                @enderror
                <br>
                <input type="password" name="password" value="Password">
                @error('password')
                <li>{{ $message }}</li>
                @enderror
                <br>
                <button class="login-button" type="submit" name="submit">LOGIN</button>
            </form>
        </div>
        <p id="add-info">No account yet? Click on the link below to go back to the homepage, where you can find the button to sign up to Your <h3 id="local-butcher-login">Local Butcher</h3></p>
        <a id="home" href="{{ route('home') }}">Home</a>
        </div>
    </section>
@endsection