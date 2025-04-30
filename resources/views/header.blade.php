<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('global.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>PlantiCanhas - Alimentos Frescos de Estufa</title>
</head>

<body>
    <header id="masthead" class="site-header sticky-top shadow-sm" role="banner">
        <div class="container py-2">
            <nav class="navbar navbar-expand-lg align-items-center">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="">
                        <img class="btn-logo me-2" src="https://www.plantazon.pt/static/frontend/bulbsdirect/bulbsdirect-theme-2/pt_PT/images/logo.svg" alt="PlantiCanhas">
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
                                <a class="nav-link fw-medium" href="#sustentabilidade">Sustentabilidade</a>
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

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                @if(Str::startsWith($banner->image, 'http') || Str::startsWith($banner->image, '/'))
                    <img src="{{ $banner->image }}" class="d-block w-100" alt="Imagem de plantas em destaque">
                @else
                    <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100" alt="Imagem de plantas em destaque">
                @endif
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>