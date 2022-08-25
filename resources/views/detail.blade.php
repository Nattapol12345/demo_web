@extends('/layout/master')
@section('demo')
    <title>Document</title>
 </head>
 <body>
  


   <div class="container px-4 px-lg-5">
      
      <!-- Heading Row-->    
      <div class="row gx-4 gx-lg-5 align-items-center my-5">
         <div class="card text-white bg-secondary my-5 py-4 ">
            <div class="row gx-4 gx-lg-5 align-items-center">
               
               <h2>{{$post->title}}</h2>
               <img src="https://preview.redd.it/43egns6irm981.jpg?auto=webp&s=6da199931e9151167720f9929f96d7032aeec40f" width='150' height='500' class="d-block w-100" alt="...">
               <h5>{{$post->detail}}</h5>  
            </div>
          <!-- Call to Action-->
          <div class="ms-auto mb-2 mb-lg-0">
            <div class="icon">
            <i class="fas fa-arrow-alt-circle-left fa-3x" type="button" onclick="history.back()"></i>
           </div>
        </div>
          <!-- Content Row-->
         </div>
      </div>
      {{-- @endforeach --}}
   </div>
 </body>
 </html>
 @endsection