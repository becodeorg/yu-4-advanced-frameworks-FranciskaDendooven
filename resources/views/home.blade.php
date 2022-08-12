@extends('components.layout')
    @section('content')
        <section class="index-home">
            
            <h3>Welcome to your</h3><h3 id="local-butcher">Local Butcher</h3><h3>Shop</h3>
            <h5>Sign up to get access to exclusive tattoo designs and book your appointment</h5>

                <div class="signup">
                    <p>Don't have an account yet?<br>Sign up here!</p>
                    <br>
                    <h4><a href="{{ route('submitSignUp') }}"><button>SIGN UP</button></a></h4>
            </div>

            </div>
            <br>
            <div class="login">
                <p>Have an account?<br>Great!<br>Login here!</p>
                <br>
                <h4><a href="{{ route('form') }}"><button>LOGIN</button></a></h4>
            </div>

        </section>
    @endsection
