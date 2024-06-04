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
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link" href="{{route('ricette')}}">Ricette</a>
              </li>
            
            </ul>
          </div>
          <div class="imgIcon"></div>
        </div>
      </nav>
    </div>
    <!-- Fine NavBar-->

    <!-- Hero Section-->
    <div class="container my-5">
      <div
        class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg container-white"
      >
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis">
            Ricette di Sicilia
          </h1>
          <p class="lead">
            Sotto un cielo zaffiro reso raggiante da un sole ardente,<br />
            la Sicilia culla sapori dal cuore fervente.<br />
            Tra ulivi danzanti e mare incantato,<br />
            il profumo della caponata, un assaggio obbligato. <br />
            Ogni piatto un racconto, ogni sapore un viaggio,<br />
            la Sicilia nel cuore, in ogni assaggio.<br />
            Un'ode alla terra di sole, mare e vento,<br />
            dove cucinare è arte, è puro sentimento.<br />
          </p>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
          <img
            class="rounded-3 mb-1"
            src="/media/antichiSapori.jpg"
            alt="tavolo con alimenti"
            width="720"
          />
        </div>
      </div>
    </div>
    <!-- Fine Hero Section-->

    <!-- Bootstrap carousel -->
    <div class="container customwidth p-1 shadow-lg container-white rounded-3">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/media/Arancini-di-riso_450x300.avif"
              class="d-block w-100 rounded-3"
              alt="arancini di riso"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/media/Cannoli-siciliani_450x300.avif"
              class="d-block w-100 rounded-3"
              alt="cannoli"
            />
          </div>
          <div class="carousel-item">
            <img
              src="/media/Caponata_450x300.avif"
              class="d-block w-100 rounded-3"
              alt="caponata"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <img
            src="/media/KnifeSx_transparent.png"
            alt="freccia sinistra"
            class="img-fluid"
          />
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <img
            src="/media/KnifeDx_transparent.png"
            alt="freccia destra"
            class="img-fluid"
          />
        </button>
      </div>
    </div>
    <!-- Fine Bootstrap carousel-->

    <!-- Bootstrap accordion-->
    <div class="container my-5 shadow align-self-end">
      <h2 class="h2sameheight text-center pt-2">Frequently Asked Questions</h2>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseOne"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseOne"
            >
              Come si risolve un problema di pagina non trovata?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseOne"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <p>Ricarica la ricetta e spera che sia ben cotta questa volta!</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTwo"
            >
              Che tipo di musica ascolta mentre scrive un nuovo post per un blog
              di cucina?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseTwo"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              <p>Salsa, naturalmente!</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseThree"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseThree"
            >
              Perché il blog di cucina ha iniziato a meditare?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseThree"
            class="accordion-collapse collapse"
          >
            <div class="accordion-body">
              Per trovare la ricetta perfetta per il pane zen.
            </div>
          </div>
        </div>
      </div>
      <h2 class="h2sameheight"></h2>
    </div>
    <!-- Fine Bootstrap accordion-->

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
