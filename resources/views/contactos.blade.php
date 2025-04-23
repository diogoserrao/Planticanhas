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
                    
                    <p class="text-muted">Todos os dias úteis, das 09h00 às 17h00, através dos seguintes contactos:</p>
                    
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
                    
                    <div class="mt-4">
                        <h5>Horários de Visita</h5>
                        <p>Segunda a Sexta: 09:00 - 17:00<br>
                        Sábado: 09:00 - 13:00<br>
                        Domingo: Fechado</p>
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-info-circle me-2"></i> Visitas às estufas por marcação prévia.
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
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" placeholder="Seu nome">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="seu.email@exemplo.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Seu telefone">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Assunto</label>
                                <select class="form-select" id="subject">
                                    <option selected>Selecione um assunto</option>
                                    <option value="encomenda">Fazer uma encomenda</option>
                                    <option value="informacao">Solicitar informação</option>
                                    <option value="visita">Agendar visita</option>
                                    <option value="outro">Outro assunto</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="A sua mensagem"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo com os termos e condições e política de privacidade
                                    </label>
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