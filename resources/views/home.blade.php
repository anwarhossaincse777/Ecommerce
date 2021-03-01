@extends('layouts.main')

@section('content')

    <div class="container">
       <div class="shadow " style="height:300px">

           <div class="container">
               <div class="row">


                   <div class="col col-md-6">
                       <div class="splide">
                           <div class="splide__track">
                               <ul class="splide__list">
                                   <li class="splide__slide text-center">
                                       <div class="splide_slide_container">
                                           <img src="images/slide-1.jpg" alt="">

                                       </div>

                                   </li>

                                   <li class="splide__slide text-center">
                                       <div class="splide_slide_container">
                                           <img src="images/slide-2.jpg" alt="">

                                       </div>


                                   </li>

                                   <li class="splide__slide text-center">
                                       <div class="splide_slide_container">
                                           <img src="images/slide-3.jpg" alt="">

                                       </div>

                                   </li>
                               </ul>
                           </div>
                       </div>

                   </div>


                   <div class="col col-md-6">

                   </div>

               </div>

           </div>



       </div>


        <div class="container py-5 " id="footer">
           <h3 class="my-4">Featured Products</h3>

            <div class="card" style="width: 18rem;">
                <img src="images/slide-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    {{--for silder --}}

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '.splide' ).mount();
        } );
    </script>




@endsection













