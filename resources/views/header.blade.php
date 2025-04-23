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
                        <span class="brand-text fw-bold">PlantiCanhas</span>
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

    <!-- Hero Section com overlay de texto -->
    <section class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Da Nossa Terra para a Sua Mesa</h1>
                <p class="lead">Alimentos frescos, saudáveis e sustentáveis, cultivados com paixão nas nossas estufas familiares.</p>
                <a href="#produtos" class="btn btn-light btn-lg me-3">Conheça os Produtos</a>
                <a href="#contactos" class="btn btn-outline-light btn-lg">Contacte-nos</a>
            </div>
        </div>
    </section>
</body>