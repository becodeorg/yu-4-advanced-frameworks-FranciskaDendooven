<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Form</title>
</head>
<body>
    {{-- @section('content') --}}
    <h1>Welcome</h1>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <p>Don't have an account yet? Sign up here!</p>
                <h4><a href="{{ route('form') }}">SIGN UP</a></h4>
        </div>
        <br>
        <hr>
        <div class="index-login-login">
            <p>Have an account? Login here!</p>
            <h4><a href="{{ route('form') }}">LOGIN</a></h4>
        </div>
    </section>
    {{-- @endsection --}}
</body>
</html>
