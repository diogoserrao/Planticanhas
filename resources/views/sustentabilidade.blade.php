<head>

    <link rel="stylesheet" href="sustentabilidade.css">

</head>


<section id="sustentabilidade" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Compromisso com a Sustentabilidade</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p class="section-subtitle">Na PlantiCanhas, a sustentabilidade está no centro de tudo o que fazemos, desde as sementes até à sua mesa.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Gestão de Água</h3>
                    <p>Utilizamos sistemas de irrigação por gotejamento que reduzem o consumo de água em até 70% em comparação com métodos tradicionais.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>Zero Desperdício</h3>
                    <p>Todos os resíduos orgânicos são compostados e devolvidos ao solo como nutrientes, fechando o ciclo natural.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>Biodiversidade</h3>
                    <p>Preservamos áreas naturais em nossa propriedade e promovemos a polinização natural através da proteção de espécies locais.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3>Embalagens Ecológicas</h3>
                    <p>Utilizamos apenas embalagens compostáveis ou reutilizáveis para todos os nossos produtos.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Cultivo Natural</h3>
                    <p>Nossas plantas são cultivadas sem pesticidas sintéticos, utilizando apenas métodos naturais de controle de pragas.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="sustainability-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Sementes Não-OGM</h3>
                    <p>Utilizamos exclusivamente sementes tradicionais e variedades locais, sem modificação genética.</p>
                </div>
            </div>
        </div>

        <div class="certification-banner fade-in">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h4>Práticas Sustentáveis</h4>
                    <p class="mb-0">Nossos métodos de cultivo seguem princípios ecológicos, garantindo produtos de qualidade com mínimo impacto ambiental.</p>
                </div>
                <div class="col-md-3 text-center text-md-end">
                    <i class="fas fa-leaf"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animação de scroll para os elementos
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('#sustentabilidade .fade-in');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementPosition < windowHeight - 100) {
                    const delay = element.getAttribute('data-delay') || 0;

                    setTimeout(() => {
                        element.classList.add('animate');
                    }, delay);
                }
            });
        };

        // Adiciona evento de scroll
        window.addEventListener('scroll', animateOnScroll);

        // Executa uma vez ao carregar a página
        animateOnScroll();

        // Efeito hover para os cards
        const sustainabilityCards = document.querySelectorAll('.sustainability-card');

        sustainabilityCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
            });

            card.addEventListener('mouseleave', function() {
                if (!this.classList.contains('animate')) return;
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
            });
        });
    });
</script>