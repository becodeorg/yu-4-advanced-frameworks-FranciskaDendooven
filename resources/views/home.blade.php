@extends('components.layout')
    @section('content')
        <section class="index-home">
            <h1 id="welcome">Welcome</h1>
                <div class="signup">
                    <p>Don't have an account yet?<br>Sign up here!</p>
                    <br>
                    <h4><a href="{{ route('submitSignUp') }}"><button>SIGN UP</button></a></h4>
            </div>
            <hr>
            <div class="login">
                <p>Have an account? Login here!</p>
                <br>
                <h4><a href="{{ route('form') }}"><button>LOGIN</button></a></h4>
            </div>
        </section>
    @endsection
