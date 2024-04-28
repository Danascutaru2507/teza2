<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.css')
@yield('css')
<body>
<div id="app">
    @include('admin.layouts.side-bar')
    <div id="main">
        @include('admin.layouts.nav-bar')
        @yield('body')
    </div>
</div>
@include('admin.layouts.js')
@yield('js')
</body>
</html>
