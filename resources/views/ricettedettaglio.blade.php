<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog di Ricette</title>
    <!-- Bootstrap css-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css" />
  </head>
  <body>
    <!-- NavBar-->
    <div class="container container-white rounded-3 shadow-lg">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('homepage')}}"
            ><img
              class="imgIcon"
              src="/media/smallIcon.jpg"
              alt="small sicily icon"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item me-5">
                <a class="nav-link " aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link active" href="{{route('ricette')}}">Ricette</a>
              </li>
            
            </ul>
          </div>
          <div class="imgIcon"></div>
        </div>
      </nav>
    </div>
    <!-- Fine NavBar-->

    

    <div class="container my-5 vh-100">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis">{{$ricetta['nome']}}</h1>
            <h2>{{$ricetta['desc']}}</h2>
            <h3>Preparazione: </h3>
            <p class="lead">{{$ricetta['preparazione']}}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <a href="{{$ricetta['link']}}" target="_blank"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">LinkRicetta</button></a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="{{$ricetta['urlimg']}}" alt="" width="720">
          </div>
        </div>
      </div>
  

  

 

   

    <!-- Bootstrap Footer-->
    <footer
      class="d-flex bg-light text-center text-lg-start justify-content-center mt-5"
    >
      <div
        class="text-center p-3 w-100"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © 2024 Blog di Ricette
      </div>
    </footer>

    <!-- Bootstrap script-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    </body>
</html>
