<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tiny.cloud/1/r2rsxnad6anys8b5ygl12hweqqkyx9hrma53y41wbcp9u9mq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>@include('../includes.header')
</head>
<body>
    @include('../includes/employer-nav')
    @yield('content')
    @include('../includes.candidate-footer')
    @include('sweetalert::alert')
    @yield('script')
</body>
</html>