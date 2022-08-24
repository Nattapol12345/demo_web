@extends('/layout/master')
@section('demo')

<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="https://wallpaperaccess.com/full/3717842.png" width='150px' height='300px' class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p></p>
                                    </div>
                            </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://wallpaperaccess.com/full/3717847.jpg" width='150px' height='300' class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://preview.redd.it/43egns6irm981.jpg?auto=webp&s=6da199931e9151167720f9929f96d7032aeec40f" width='150' height='300' class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                                </div>
                            </div>
                        </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        
        <div class="col-lg-5">
            <h1 class="font-weight-light">Business Name or Tagline</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-primary" href="#!">Call to Action!</a>
        </div>
    </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 ">
            <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="card-body col-lg-7 text-center midea">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/quztsT8nnpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 contents">
            <h1 class="font-weight-light">New Monster</h1>
            <p>Summoners War New Monster [Battle Angel] Reveal</p>
            <a class="btn btn-primary" href="https://sw.com2us.com/en/skyarena/game">Call to Action!</a>
        </div>
        </div>
    </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
        @foreach($posts2 as $post)  
       
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p class="card-text">{{$post->detail}}</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                </div>
            </div>
            
           
            @endforeach       
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Two</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info..</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Three</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                </div>
            </div>
        </div>
    </div>
    


@endsection

