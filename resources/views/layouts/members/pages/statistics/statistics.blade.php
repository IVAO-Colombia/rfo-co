<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts/members/head')
</head>

<body>
    @include('layouts/members/nav')
    <style>
        .bg-success {
            background-color: #2EC662 !important;
        }

        .bg-danger {
            background-color: #E93434 !important;
        }
    </style>
    <div class="clearfix" style="height: 2rem"></div>
    @include('layouts/members/widgets/statistics/dep_flights')
    <div class="clearfix" style="height: 3rem"></div>
    @include('layouts/members/widgets/statistics/arr_flights')
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">
    </script>
</body>

</html>
