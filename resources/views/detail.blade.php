@extends('/layout/master')
@section('demo')
    <title>Document</title>
 </head>
 <body>
   
   
 

   <div class="card-body container gx-4 gx-lg-5 align-items-center my-5">
      <div class="sidenav">
         <a href="#about">About</a>
         <a href="#services">Services</a>
         <a href="#clients">Clients</a>
         <a href="#contact">Contact</a>
       </div>
      <!-- Heading Row-->    
      <div class="row gx-4 gx-lg-5 align-items-center my-5">
         <div class="card text-white bg-secondary my-5 py-4 ">
            <div class="row gx-4 gx-lg-5">
               <div>
                  <h2 class="font-weight-light">{{$post->title}}</h2>
               </div>
               <img src="https://preview.redd.it/43egns6irm981.jpg?auto=webp&s=6da199931e9151167720f9929f96d7032aeec40f" width='150' height='500' class="d-block w-100 center" alt="...">
               
               <div>
                  <h1 class="font-weight-light">Summoner war</h1>
                  <p>{{$post->detail}}</p>
              </div>
            </div>
          <!-- Call to Action-->
          <div class="ms-auto">
            <a class="icon" href="{{ url('/') }}">
               <i class="fas fa-arrow-alt-circle-left fa-3x"></i>
            </a>
        </div>
          <!-- Content Row-->
         </div>
      </div>
      {{-- @endforeach --}}
   </div>
 </body>
 </html>
 @endsection