<!DOCTYPE html>
<html lang="en">
<head>
   @include('../includes.header')
</head>
<body>
    <div id="admin">
        @include('../includes/admin')
        @yield('content')
    </div>
    @include('../includes.candidate-footer')
    @include('sweetalert::alert')
    @yield('script')
</body>
</html>