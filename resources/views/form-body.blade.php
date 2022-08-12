@extends('components/layout')
@section('content')
        <div class="index-home">
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
        <a href="{{ route('home') }}">Home</a>
    </section>
@endsection