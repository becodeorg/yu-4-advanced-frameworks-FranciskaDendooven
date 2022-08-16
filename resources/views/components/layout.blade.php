<!DOCTYPE html>

<title>My first Laravel Form</title>
<link rel="stylesheet" href="/css/style.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="/resources/js/app.js"></script>

<body>
    @if(session()->has('success'))
    <p x-data="{show: true}" X-init="setTimeout(()=>show = false, 10000)" x-show="show">{{ session()->get('success') }}</p>
    @endif
    @include('header')

    @yield('content')

    @include('footer')
</body>
