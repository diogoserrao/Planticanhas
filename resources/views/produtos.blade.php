<head>
    <link rel="stylesheet" href="{{ asset('produtos.css') }}">
</head>

<body>
    <section id="produtos" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Produtos</h2>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p class="lead">Cultivamos uma variedade de produtos frescos durante todo o ano, garantindo qualidade e sabor em cada colheita.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @forelse($products as $category => $categoryProducts)
                <!-- Categoria: {{ $category }} -->
                <div class="col-12 mb-4 {{ !$loop->first ? 'mt-5' : '' }}">
                    <h3 class="category-title">{{ $category }}</h3>
                </div>

                @foreach($categoryProducts as $product)
                <!-- Produto {{ $loop->iteration }} -->
                <div class="col-md-4 mb-4">
                    <div class="product-card h-100 shadow-sm fade-in">
                        <div class="product-image-container">
                            @if($product->image)
                            @if(Str::startsWith($product->image, ['http', '/']))
                            <img src="{{ $product->image }}" class="product-image" alt="{{ $product->name }}">
                            @else
                            <img src="{{ asset('storage/' . $product->image) }}" class="product-image" alt="{{ $product->name }}">
                            @endif
                            @else
                            <img src="https://via.placeholder.com/400x300?text=Sem+Imagem" class="product-image" alt="{{ $product->name }}">
                            @endif

                            <div class="product-badge">
                                <span class="badge {{ $product->available ? 'available' : 'on-request' }}">
                                    {{ $product->available ? 'Disponível' : 'Por Encomenda' }}
                                </span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h5 class="product-title">{{ $product->name }}</h5>
                            <p class="product-description">{{ $product->description }}</p>
                            <div class="product-footer">
                                @if($category == 'Frutas Frescas')
                                <span class="season-badge"><i class="fas fa-calendar-alt me-2"></i>Todo o ano</span>
                                @elseif($product->name == 'Milho')
                                <span class="season-badge"><i class="fas fa-sun me-2"></i>Verão</span>
                                @elseif($product->name == 'Tabuleiros Plantados')
                                <span class="season-badge"><i class="fas fa-seedling me-2"></i>Hortas caseiras</span>
                                @elseif($product->name == 'Couves')
                                <span class="season-badge"><i class="fas fa-seedling me-2"></i>Colheita artesanal</span>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @empty
                <div class="col-12 text-center">
                    <p>Nenhum produto disponível no momento.</p>
                </div>
                @endforelse

                <div class="text-center mt-5">
                    <a href="#contactos" class="btn btn-order-now">
                        <i class="fas fa-shopping-basket me-2"></i> Faça sua Encomenda
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animação de scroll para os elementos
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.fade-in');

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

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll();

            // Efeito hover para os cards
            const productCards = document.querySelectorAll('.product-card');

            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.12)';
                });

                card.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('animate')) return;
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '';
                });
            });
        });
    </script>
</body>