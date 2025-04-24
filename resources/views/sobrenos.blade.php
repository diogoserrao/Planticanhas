<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Agricultura Sustentável</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="sobrenos.css">
</head>
<body>
    <section id="sobrenos" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fade-in">Sobre Nós</h2>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 fade-in" data-delay="200">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Nossa história" class="img-fluid rounded shadow-lg">
                        <div class="position-absolute top-0 start-0 translate-middle bg-success text-white p-3 rounded-circle d-none d-lg-block" style="width: 120px; height: 120px; display: flex !important; align-items: center; justify-content: center;">
                            <div class="text-center">
                                <div class="fw-bold">Desde</div>
                                <div class="fs-4 fw-bold">1995</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="about-content fade-in" data-delay="400">
                        <p class="lead fw-bold mb-4">Uma família dedicada à agricultura sustentável</p>
                        
                        <div class="mb-4">Na nossa família, o cultivo sempre fez parte da vida. Com raízes bem assentes na terra e olhos postos no futuro, criámos uma pequena empresa familiar dedicada à produção de alimentos frescos e sustentáveis em estufas.</div>
                        
                        <div class="mb-4">Ao longo dos anos, aperfeiçoámos as nossas práticas agrícolas para garantir produtos saborosos, nutritivos e cultivados com respeito pela natureza. As nossas estufas permitem-nos controlar o ambiente de cultivo com precisão, reduzindo o uso de químicos, poupando água e garantindo colheitas de qualidade durante todo o ano.</div>
                    
                        <div class="mb-4">Desde tomates maduros no ponto certo a ervas aromáticas cheias de sabor, tudo o que sai das nossas estufas é tratado com o mesmo cuidado e dedicação que damos à nossa própria mesa.</div>
                    
                        <div class="mb-4">Mais do que alimentos, cultivamos confiança. E é com orgulho que levamos o melhor da nossa terra até si.</div>
                        
                        <div class="row g-4 mt-4">
                            <div class="col-6 col-md-3 text-center fade-in" data-delay="500">
                                <div class="fs-1 text-success"><i class="fas fa-seedling"></i></div>
                                <h5 class="mt-2">Cultivo Natural</h5>
                            </div>
                            <div class="col-6 col-md-3 text-center fade-in" data-delay="600">
                                <div class="fs-1 text-success"><i class="fas fa-tint"></i></div>
                                <h5 class="mt-2">Economia de Água</h5>
                            </div>
                            <div class="col-6 col-md-3 text-center fade-in" data-delay="700">
                                <div class="fs-1 text-success"><i class="fas fa-sun"></i></div>
                                <h5 class="mt-2">Energia Solar</h5>
                            </div>
                            <div class="col-6 col-md-3 text-center fade-in" data-delay="800">
                                <div class="fs-1 text-success"><i class="fas fa-leaf"></i></div>
                                <h5 class="mt-2">Sem Pesticidas</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Observador para animações
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-delay') || 0;
                
                setTimeout(() => {
                    entry.target.classList.add('animate');
                }, delay);
                
                // Opcional: desobservar após a animação para melhor performance
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observar todos os elementos com classe fade-in
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });

    // Efeito hover adicional para melhor interatividade
    document.querySelectorAll('.about-content .col-md-3').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
    </script>
</body>
</html>