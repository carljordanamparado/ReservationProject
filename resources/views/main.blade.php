<!DOCTYPE html>
<html>

@include('partials._head')

<body class="sidebar-mini layout-fixed" style="height: auto;">

@include('partials._nav')

<div class="wrapper">
    @yield('content')
</div>

@include('partials._footer')

@include('partials._javascript')
@yield('scripts')

</body>

</html>
