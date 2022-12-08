<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>
<style>
 .back{
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
    
 }
</style>
<body class="page-header-fixed  back">

    @include('partials.analytics')

    <div style="margin-top: 10%;"></div>

    <div class="container-fluid back">
        @yield('content')
    </div>

    <div class="scroll-to-top back"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>