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

   
    <!-- Section Ricette con bootstrap card-->

    <div class="container vh-100 d-flex align-items-center">
      <div class="row my-5 gy-3">
        <!-- Ricette -->
        @foreach ($ricette as $ricetta)
            
        <div class="col-12 col-lg-4 text-center">
          <div class="card shadow h-100 p-1">
            <img
              src="{{$ricetta['urlimg']}}"
              class="card-img-top"
              alt="{{$ricetta['nome']}}"
            />
            <div class="card-body">
              <h5 class="card-title">{{$ricetta['nome']}}</h5>
              <p class="card-text">
                {{$ricetta['desc']}}
              </p>
              <a
                href="{{route('ricette.detail', ['id'=>$ricetta['id']])}}"
                class="btn btn-light align-self-end shadow"
                >Vai alla ricetta</a
              >
            </div>
          </div>
        </div>

        @endforeach
        <!-- Ricette End-->
        </div>
    </div>

    <!-- Fine Section Ricette con boostrap card-->

 

   

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
