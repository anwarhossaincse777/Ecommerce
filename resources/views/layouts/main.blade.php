
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- require meta tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('js/splide/css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">

    <style>

        body{

            font-size:0.85em;
        }
    a{text-decoration: none; cursor: pointer}
        #footer a{color:#fff; line-height:30px;}
        #footer a:hover{text-decoration: underline}


    </style>



    <script src="{{asset('js/splide/js/splide.min.js')}}"></script>

    <title>{{config('app.name','Laravel')}}</title>
</head>

<body>
<div class="bg-primary text-center text-white p-2">#Learn Ecommerce Development</div>


<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">  <a href="{{url('/')}}"> {{config('app.name','Laravel')}}</a></p>
    <nav class="my-2 my-md-0 me-md-3">

        @guest
        <a class="p-2 text-dark" href="{{route('login')}}">Login</a>
        <a class="p-2 text-dark" href="{{route('register')}}">Register</a>
        @endguest
        @if(\Illuminate\Support\Facades\Auth::check())
                     <b>Welcome || {{\Illuminate\Support\Facades\Auth::user()->name}}</b>
                <a href="{{route('dashboard')}}" class="p-2 text-dark" >Account</a>
                <a class="p-2 text-dark" onclick="preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{route('logout')}}" method="post">
                    @csrf
                </form>

            @endif
    </nav>
    <a class="btn btn-outline-primary" href="#">Cart</a>
</header>

<main class="container" style="min-height: 300px">

    @yield('content')



</main>


<div class="border-top">
  <div class="container">

    <footer class="pt-4 my-md-5 pt-md-5 ">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>

                Follow us at <br>
                <a target="_blank" href=""><i class="fab fa-facebook-square  fa-2x"></i></a> &nbsp;
                <a target="_blank" href=""><i class="fab fa-twitter-square fa-2x"></i></a> &nbsp;
                <a target="_blank" href=""><i class="fab fa-youtube-square fa-2x"></i></a>



            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary" href="#">Random feature</a></li>
                    <li><a class="link-secondary" href="#">Team feature</a></li>
                    <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary" href="#">Another one</a></li>
                    <li><a class="link-secondary" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
</body>

<!-- optional javascript choose one of the twol -->




<!-- option 1:bootstrap Bundle with popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- option2 separate popper and bootstrap js -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->


</html>
