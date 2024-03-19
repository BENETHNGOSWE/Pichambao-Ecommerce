<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.plainadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 21:07:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-eou+4ZiR0VypdD2L8kmVzY8JsO2RfIfPVIexqsF1K1GUHNTljT+g7kuWqW2Qlmh/j" crossorigin="anonymous">

    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/quill/bubble.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/quill/snow.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/morris.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/datatable.css')}}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/main.css')}}" />
</head>

<body>
    @include('backend/layouts/header')
    @yield('content')
    @include('backend/layouts/sidebar')
    @include('backend/layouts/footer')

    <script src="{{ asset ('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/Chart.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/apexcharts.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/dynamic-pie-chart.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/moment.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/fullcalendar.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/jvectormap.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/world-merc.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/polyfill.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/quill.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/datatable.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/Sortable.min.js')}}"></script>
    <script src="{{ asset ('backend/assets/js/main.js')}}"></script>

</body>

</html>