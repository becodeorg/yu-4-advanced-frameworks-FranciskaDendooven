<!DOCTYPE html>

<title>My first Laravel Form</title>
<link rel="stylesheet" href="/css/style.css">


<body>
    @if(session()->has('success'))
    <p x-data="{show: true}" X-init="setTimeout(()=>show = false, 4000)" x-show="show">{{ session()->get('success') }}</p>
    @endif
    @include('header')

    @yield('content')

    @include('footer')
</body>
