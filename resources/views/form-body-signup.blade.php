@extends('components/layout')
@section('content')
    <div class="index-home">
        <p id="hi-there">Hi there! Please sign up to enjoy your Local Butcher exclusive content and book a appointment.</p>
            <div class="submit-form">
                <form action="{{ route('submitSignUp') }}" method="post">
                    @csrf
                    <label for="name">Username:</label><br>
                    <input type="text" name="name" value="Username"><br>
                    <label for="password">Password <br>
                        (longer than 8 letters, numbers, ...):</label><br>
                    <input type="password" name="password" value="Password"><br>
                    <label for="password-repeat">Repeat password:</label><br>
                    <input type="password" name="password-repeat" value="Repeat password"><br>
                    <label for="email">email:</label><br>
                    <input type="text" name="email" value="mail@example.xmail">
                    <br>
                    <button class="login-button" type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            {{-- <p id="add-info">No account yet? Click on the link below to go back to the homepage, where you can find the button to sign up to Your <h3 id="local-butcher-login">Local Butcher</h3></p> --}}
        <a id="home" href="{{ route('home') }}">Home</a>
        </div>
@endsection