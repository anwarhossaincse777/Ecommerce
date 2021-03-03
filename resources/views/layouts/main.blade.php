
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
    a{text-decoration: none;}
        #footer a{color:#fff; line-height:30px;}
        #footer a:hover{text-decoration: underline}


    </style>



    <script src="{{asset('js/splide/js/splide.min.js')}}"></script>

    <title>{{config('app.name','Laravel')}}</title>
</head>

<body>

<div class="bg-primary text-center text-white p-2">#Learn Ecommerce Development</div>

    <div class="container">
        <div class="row  my-3">
            <div class="col col-md-6" style="line-height:38px">{{config('app.name','Laravel')}}</div>





            <div class="col col-md-6 text-end" style="line-height:38px" >
                <a class="btn btn-sm  mx-2" href="{{route('login')}}">Login</a>
                <a class="btn btn-sm  mx-2" href="{{route('register')}}" >Register</a>

              <span class="border p-2">

                  <i class="fas fa-shopping-cart"></i> 0 <b>Items
              </span>



            </div>
        </div>
    </div>



    <div class="border-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class=" fa fa-home"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Mens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Womens</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">kids</a>
                            </li>

                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        </div>

    </div>

@yield('content')

        <div class="bg-secondary text-white" id="footer">

           <div class="container">
               <div class="row">
                   <div class="col-md-3">

                      <h5>{{config('app.name','Laravel')}}</h5>

                       <p>This site Made for teaching Ecommerce</p>

                   </div>
                   <div class="col-md-3">

                       <h5>Quick links</h5>
                       <a href="">About</a><br>
                       <a href="">Products</a><br>
                       <a href="">Categories</a><br>
                       <a href="">Help/Support</a><br>
                   </div>
                   <div class="col-md-3">

                       <h5>Legal</h5>
                       <a href="">Terms</a><br>
                       <a href="">Privacy</a><br>
                       <a href="">Refound Policy</a><br>
                   </div>
                   <div class="col-md-3">


                       <div class="d-none d-md-block">
                           Follow us at <br>
                           <a target="_blank" href=""><i class="fab fa-facebook-square  fa-2x"></i></a> &nbsp;
                           <a target="_blank" href=""><i class="fab fa-twitter-square fa-2x"></i></a> &nbsp;
                           <a target="_blank" href=""><i class="fab fa-youtube-square fa-2x"></i></a>
                       </div>

                   </div>
               </div>

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
