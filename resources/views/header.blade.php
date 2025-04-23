<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>Planti</title>
</head>

<body>
    <header id="masthead" class="site-header sticky-top bg-white shadow-sm" role="banner">
        <div class="container py-3">
            <nav class="navbar navbar-expand-lg align-items-center">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="">
                        <img class="btn-logo me-2" src="https://www.plantazon.pt/static/frontend/bulbsdirect/bulbsdirect-theme-2/pt_PT/images/logo.svg" alt="Planticanhas">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-2">
                                <a class="nav-link fw-medium" href="#sobrenos">Sobre Nós</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link fw-medium" href="#produtos">Produtos</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link fw-medium" href="#contactos">Contactos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://th.bing.com/th/id/R.d343136b443ca9810fb04873a294fea8?rik=eX3AWThE9linYw&pid=ImgRaw&r=0" class="d-block w-100" alt="Imagem de plantas em destaque">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/OIP.q6YZy1yB4eLuBiv29SMS2AHaFj?w=800&h=600&rs=1&pid=ImgDetMain" class="d-block w-100" alt="Imagem de plantas em destaque">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/OIP.amCA-Y2sSpS1vRBbvbbolQHaFj?rs=1&pid=ImgDetMain" class="d-block w-100" alt="Imagem de plantas em destaque">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>