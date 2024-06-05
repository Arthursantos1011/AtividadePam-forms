<!DOCTYPE html>
<html lang="">pt-br
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title>Página inicial</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
         
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/forms">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/qmsomos">Quem somos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="container">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item rounded-3 active">
              <div
                class="row bg-info bg-gradient d-flex align-items-center p-5"
              >
                <div class="col-lg-7">
                  <h1>Headphones Black-Orange</h1>
                  <p> 
                    Fone MultiLedcom bateria infinita, para o dia todo.
                  </p>
                  <h1>R$120</h1>
                  <button class="btn btn-warning">Ver Agora</button>
                </div>
                <div class="col-lg-5">
                  <img
                    src="images/banner-images/headphone.png"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item rounded-3">
              <div
                class="row bg-info bg-gradient d-flex align-items-center p-5"
              >
                <div class="col-lg-7">
                  <h1>Mega LCD TV For Sports</h1>
                  <p>
                    Tv de última geração para acompanhar esportes, Filmes e Séries.
                  </p>
                  <h1>R$3.500</h1>
                  <button class="btn btn-warning">Ver Agora</button>
                </div>
                <div class="col-lg-5">
                  <img
                    src="images/banner-images/tv.png"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
            <div class="carousel-item rounded-3">
              <div
                class="row bg-info bg-gradient d-flex align-items-center p-5"
              >
                <div class="col-lg-7">
                  <h1>X Box One</h1>
                  <p>
                    O Melhor vídeogame para se divertir nas férias que estão por vir.
                  </p>
                  <h1>R$1.420</h1>
                  <button class="btn btn-warning">Ver Agora</button>
                </div>
                <div class="col-lg-5">
                  <img
                    src="images/banner-images/xbox.png"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </header>
    <main>
     
      <section class="container mt-5" id="shoes">
        <h2>Tênis</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img
                src="images/shoes/shoe-1.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Yeezy</h5>
                <p class="card-text">
                  O tênis Adidas Yeezy é a escolha ideal para corredores e entusiastas do esporte. 
                  Confeccionado com tecnologia de ponta, proporciona máximo conforto e retorno de energia.
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Comprar agora</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img
                src="images/shoes/shoe-2.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Nike 360</h5>
                <p class="card-text">
                  O tênis Nike 360 oferece suporte e estabilidade incomparáveis para corredores. 
                  Produzido com materiais premium, apresenta excelente amortecimento e durabilidade. 
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Comprar agora</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img
                src="images/shoes/shoe-3.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Nike Airmax</h5>
                <p class="card-text">
                  O tênis Nike Air Max combina estilo e conforto para o dia a dia. 
                  Feito com materiais de alta qualidade, oferece excelente amortecimento e durabilidade.
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Comprar agora</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container my-5" id="bags">
        <h2>Camisas de Times</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img src="images/banner-images/Corinthians.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Camisa do Corinthians</h5>
                <p class="card-text">
                  A camisa oficial do Corinthians é ideal para os torcedores fiéis. Feita com tecido de alta qualidade, proporciona conforto e durabilidade. 
                  Com o escudo bordado no peito, apresenta um design moderno que celebra a tradição alvinegra.
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Ver Agora</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img src="images/banner-images/image-removebg-preview.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Camisa do São Paulo</h5>
                <p class="card-text">
                  camisa oficial do São Paulo Futebol Clube é perfeita para os torcedores. 
                  Confeccionada em tecido de alta qualidade, oferece conforto e durabilidade. Com o escudo bordado no peito.
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Ver Agora</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0 shadow-lg h-100">
              <img src="images/banner-images/Palmeiras.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Camisa do Palmeiras</h5>
                <p class="card-text">
                  A camisa oficial do Palmeiras é perfeita para os torcedores apaixonados. Confeccionada com tecido de alta qualidade, oferece conforto e resistência.
                  Com o escudo bordado no peito, combina um design moderno com a tradição alviverde.
                </p>
              </div>
              <div class="m-3">
                <button class="btn btn-warning">Ver Agora</button>
              </div>
            </div>
          </div>
        </div>
      </section>


    </main>
    <footer class="mt-5 text-center">
      <p>
        <small
          >©2024. Todos os direitos reservados. Arthur, São Paulo.
        </small>
      </p>
    </footer> <footer class="mt-5 text-center">
      <p>
        <small
          >©2024. Todos os direitos reservados. Arthur, São Paulo.
        </small>
      </p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
