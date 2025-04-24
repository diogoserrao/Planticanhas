<section id="contactos" class="contacts-section py-5">
    <div class="container">
        <h2 class="section-title">Entre em Contacto</h2>

        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <p class="lead">Estamos disponíveis para responder a todas as suas perguntas ou agendar uma visita às nossas estufas.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-5 fade-in">
                <div class="contact-info bg-white p-4 rounded-3 shadow-sm h-100">
                    <h4 class="mb-4 border-bottom pb-3 text-success">Informações de Contacto</h4>

                    <p class="text-muted">Todos os dias úteis, das 09h00 às 18h00, através dos seguintes contactos:</p>

                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-light rounded-circle p-3">
                                <i class="fas fa-envelope text-success"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0"><strong>E-mail</strong></p>
                            <a href="mailto:joaoazul@gmail.com" class="text-decoration-none text-dark">joaoazul@gmail.com</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-light rounded-circle p-3">
                                <i class="fas fa-phone text-success"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0"><strong>Telefone</strong></p>
                            <a href="tel:123456789" class="text-decoration-none text-dark">123 456 789</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-light rounded-circle p-3">
                                <i class="fas fa-mobile-alt text-success"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0"><strong>Telemóvel</strong></p>
                            <a href="tel:123456789" class="text-decoration-none text-dark">123 456 789</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-light rounded-circle p-3">
                                <i class="fas fa-map-marker-alt text-success"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0"><strong>Morada</strong></p>
                            <p class="mb-0">Caminho do Outeiro, nº 1<br>9360-507 Ponta do Sol</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-7 fade-in">
                <div class="map-container rounded-3 shadow-sm overflow-hidden h-100" style="min-height: 450px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2973.933130182436!2d-17.1164491819298!3d32.695984248113085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-PT!2spt!4v1745407897961!5m2!1spt-PT!2spt"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="bg-white p-4 rounded-3 shadow-sm fade-in">
                    <h4 class="mb-4 text-success">Envie-nos uma mensagem</h4>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Seu nome" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Seu telefone">
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Assunto</label>
                                <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                    <option value="">Selecione um assunto</option>
                                    <option value="encomenda">Fazer uma encomenda</option>
                                    <option value="informacao">Solicitar informação</option>
                                    <option value="outro">Outro assunto</option>
                                </select>
                                @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" placeholder="A sua mensagem" required></textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        Concordo com os termos e condições e política de privacidade
                                    </label>
                                    @error('terms')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg px-5">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>