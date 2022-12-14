<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts/members/head')
    </head>
    <body>
        @include('layouts/members/nav')
        <div class="clearfix" style="height: 2rem"></div>
        <div class="container">
            <div class="container" style="text-align: center">
                <div
                    class="btn-group btn-group-lg"
                    role="group"
                    aria-label="Basic mixed styles"
                >
                    <button
                        class="btn btn-warning flights"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseDep"
                        aria-expanded="false"
                        aria-controls="collapseDep"
                    >
                        <i class="fas fa-plane-departure fa-fw"></i>&nbsp;{{
                            __("booking.Departure")
                        }}s
                    </button>
                    <button
                        class="btn btn-warning flights"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseArr"
                        aria-expanded="false"
                        aria-controls="collapseArr"
                    >
                        {{ __("booking.Arrival") }}s&nbsp;<i
                            class="fas fa-plane-arrival fa-fw"
                        ></i>
                    </button>
                </div>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="accordion" id="accordionExample">
                <div
                    id="collapseDep"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                >
                    <div class="container">
                        @include('layouts/members/widgets/booking/flights_dep')
                    </div>
                </div>
                <div
                    id="collapseArr"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionExample"
                >
                    <div class="container">
                        @include('layouts/members/widgets/booking/flights_arr')
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->

        <!-- Bootstrap Bundle with Popper.js -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
