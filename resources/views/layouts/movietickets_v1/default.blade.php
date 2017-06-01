@include('layouts.movietickets_v1.scripts')

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Movie Tickets</title>

</head>

<body class="theme-red">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>

    @include('layouts.movietickets_v1.navbar')

    <section>

        @include('layouts.movietickets_v1.leftsidebar')
        @include('layouts.movietickets_v1.rightsidebar')

    </section>

    <section class="content">
        {{-- <div class="container-fluid"> --}}
            @yield('content')
        {{-- </div> --}}
    </section>


</body>

</html>