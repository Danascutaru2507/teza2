<!DOCTYPE html>
<html>
@include('frontend.layouts.css')
@yield('css')

@include('frontend.layouts.nav-bar')

@yield('body')

@include('frontend.layouts.js')
@yield('js')
</html>
