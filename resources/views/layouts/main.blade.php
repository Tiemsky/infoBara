<!DOCTYPE html>
<html lang="en">
<head>
@include('../includes.header')
</head>
<body>
    <div id="app">
        @include('../includes.nav')
   
    @yield('content')
   
    </div>
    @include('../includes.footer')
    @include('sweetalert::alert')
    
</body>

</html>