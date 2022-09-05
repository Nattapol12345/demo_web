
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="video" href="/resources/assets" />
        <link rel="stylesheet" href="css/styles.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" >
        <script src="{{ asset("assets/js/scripts.js") }}"></script> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
        <style>
          body, html {
                      height: 100%;
                      width:100%;
                      margin: 0;
                    }
            body {
                background-image: url("https://img.wallpapersafari.com/tablet/1536/2048/74/42/7Zlta1.jpg");
                background-repeat: no-repeat;
                height: 100%;
                background-position: center;
                background-size: cover;         
                }
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                }

                .vertical-menu {
                width: 200px;
                }

                .vertical-menu a {
                background-color: #eee;
                color: black;
                display: block;
                padding: 12px;
                text-decoration: none;
                }

                .vertical-menu a:hover {
                background-color: #ccc;
                }

                .vertical-menu a.active {
                background-color: #04AA6D;
                color: white;
                }
                .card-body1 {
                padding-left: -25%;
                margin-top: 100%;
                
                }
                {
font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
div.a {
  white-space: nowrap; 
  width: 290px; 
  overflow: hidden;
  text-overflow: ellipsis;
  
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 80px 200px;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.text-pre{
color: rgb(0, 0, 0);
}
.info {
  float: left;
  width: 70%;
  position: absolute;
  z-index: 1;
  top: 102px;
  left: 480px;
  padding: 0 10px;
  
}
.img-rune {
  width: 125%;
  padding-left:  30%;
  padding-top:  5%;
}.btn-back {
  padding-left:  95%;
}
.btn-back1 {
  padding-top:  3%;
  padding-left:  92%;
  padding-bottom: 3%;
}
.news {
  padding-bottom: 70px;
}
.mideas {
  padding-bottom: 70px;
  width: auto;
}


  </style>
    </head>
    <body>
     
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Dev Webgame</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
                        <li class="dropdown">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Combo</a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink" >
                              <li><a class="dropdown-item" href="{{url('combo')}}">Combos</a></li>                            
                            </ul>
                          </li></li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Content</a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li><a class="dropdown-item" href="{{url('list')}}">Monster</a></li>
                              <li><a class="dropdown-item" href="{{url('tier')}}">Tier list</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('demo')
        <!-- Footer-->
    <footer class="py-3 bg-dark ">
        <div class="container px-4 px-md-5 footer"><p class="m-0 text-center text-white">Copyright &copy; Dev Webgame 2022</p></div>   
        </footer>
        <!-- Bootstrap core JS-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
