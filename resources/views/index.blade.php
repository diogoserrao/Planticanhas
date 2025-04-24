<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('global.css') }}">

    <title>PlantiCanhas </title>
</head>

<body>
    @include('header')
    @include('sobrenos')
    @include('produtos')
    @include('sustentabilidade')
    @include('contactos')

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">PlantiCanhas</h5>
                    <p>Produzimos alimentos frescos em estufas com práticas sustentáveis, respeitando a natureza e garantindo qualidade excepcional durante todo o ano.</p>
                    <div class="mt-3">
                        <a href="#" class="me-3 text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3 text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h5 class="text-uppercase mb-3">Navegação</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#sobrenos" class="text-decoration-none text-white">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#produtos" class="text-decoration-none text-white">Produtos</a></li>
                        <li class="mb-2"><a href="#sustentabilidade" class="text-decoration-none text-white">Sustentabilidade</a></li>
                        <li class="mb-2"><a href="#contactos" class="text-decoration-none text-white">Contactos</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5 class="text-uppercase mb-3">Horário</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Segunda a Sexta: 09:00 - 17:00</li>
                        <li class="mb-2">Sábado: 09:00 - 13:00</li>
                        <li class="mb-2">Domingo: Fechado</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5 class="text-uppercase mb-3">Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Caminho do Outeiro, nº 1, 9360-507 Ponta do Sol</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> 123 456 789</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> joaoazul@gmail.com</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="border-top border-secondary pt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="small text-muted mb-0">&copy; PlantiCanhas 2025 - Todos os direitos reservados</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <p class="small text-muted mb-0">
                                    <a href="#" class="text-muted text-decoration-none">Política de Privacidade</a> |
                                    <a href="#" class="text-muted text-decoration-none">Termos e Condições</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuração do Intersection Observer para efeitos de fade-in
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Pega o atraso personalizado se existir
                        const delay = entry.target.dataset.delay || 0;

                        // Programa a adição da classe com o atraso especificado
                        setTimeout(() => {
                            entry.target.classList.add('animate');
                        }, delay);

                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1, // Reduzido para ativar mais cedo
                rootMargin: '0px 0px -10% 0px' // Ajustado para ativar antes de entrar completamente na viewport
            });

            // Observa todos os elementos com a classe fade-in
            document.querySelectorAll('.fade-in').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>

</html>