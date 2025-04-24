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
    @include('footer')

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