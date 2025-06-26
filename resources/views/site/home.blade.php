@extends('site.layouts.main')

@php($activeMenu = 'home')

@push('styles')
<!-- Custom CSS -->
@endpush

@section('content')
<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <h1>Transforme sua empresa <br>de onde estiver e quando quiser</h1>
                <h2>Há mais de 40 anos transformando empresas através da tecnologia</h2>
                <div class="d-flex mt-4">
                    <a href="/#yannis" class="btn btn-primary btn-lg me-3">Conheça o Yannis</a>
                    <a href="/#contato" class="btn btn-outline-primary btn-lg">Solicite um orçamento</a>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-center" data-aos="fade-left">
                <img src="/img/site/hero.png" class="img-fluid animated" alt="Soluções digitais">
            </div>
        </div>
    </div>
</section>

<!-- Sobre Section -->
<section id="sobre" class="section-bg">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Sobre a Giusti Sistemas</h2>
            <p>Conheça nossa história e valores</p>
        </div>

        <div class="row content">
            <div class="col-12 mb-4 text-center" data-aos="zoom-in">
                <p>
                    Com mais de 40 anos de história, a Giusti Sistemas nasceu para desenvolver soluções tecnológicas personalizadas,
                    com foco em eficiência, crescimento e parceria de longo prazo com nossos clientes.
                </p>
            </div>
        </div>

        <div class="row align-items-start">
            <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                <div class="d-flex">
                    <div class="me-3"><i class="fas fa-check-circle fa-2x text-primary"></i></div>
                    <div>
                        <h5>Especialização em soluções personalizadas</h5>
                        <p>Entendemos a fundo o seu negócio para criar sistemas que realmente façam sentido para a sua operação.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-delay="200">
                <div class="d-flex">
                    <div class="me-3"><i class="fas fa-users fa-2x text-primary"></i></div>
                    <div>
                        <h5>Relacionamento próximo e duradouro</h5>
                        <p>Mais que fornecedores, queremos ser parceiros. O seu sucesso é parte da nossa missão.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="300">
                <div class="d-flex">
                    <div class="me-3"><i class="fas fa-lightbulb fa-2x text-primary"></i></div>
                    <div>
                        <h5>Inovação com propósito</h5>
                        <p>Aplicamos tecnologia para resolver problemas reais e gerar valor de forma prática e mensurável.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-delay="400">
                <div class="d-flex">
                    <div class="me-3"><i class="fas fa-headset fa-2x text-primary"></i></div>
                    <div>
                        <h5>Atendimento humano e ágil</h5>
                        <p>Oferecemos suporte técnico ágil e eficiente, sempre prontos para resolver suas necessidades com rapidez e qualidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Serviços Section -->
<section id="servicos">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Nossos Serviços</h2>
            <p>Soluções completas para o seu negócio</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="service-box">
                    <div class="icon"><i class="fas fa-laptop-code"></i></div>
                    <h4>Desenvolvimento personalizado</h4>
                    <p>Automatizamos sua operação com sistemas criados sob demanda, sem recursos desnecessários.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-box">
                    <div class="icon"><i class="fas fa-plug"></i></div>
                    <h4>Integrações</h4>
                    <p>Conectamos seus sistemas com ERPs, SAT, NFe, NFCe, MDFe, marketplaces e mais — tudo funcionando em sincronia.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-box">
                    <div class="icon"><i class="fas fa-tools"></i></div>
                    <h4>Manutenção e suporte</h4>
                    <p>Equipe técnica pronta para atuar rápido e manter sua operação sempre rodando.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-box">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h4>Consultoria tecnológica</h4>
                    <p>Analisamos seu cenário atual e indicamos as melhores escolhas para evoluir com segurança.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yannis Section -->
<section id="yannis" class="section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="yannis-content">
                    <h2>Conheça o Yannis ERP</h2>
                    <p>
                        O Yannis é um sistema ERP completo, desenvolvido para atender às necessidades de pequenas e médias empresas. Com módulos integrados de vendas, estoque, financeiro, fiscal e muito mais, o Yannis otimiza processos e aumenta a produtividade do seu negócio.
                    </p>
                    <p>
                        Desenvolvido com tecnologia moderna e interface intuitiva, o Yannis é fácil de usar e se adapta às necessidades específicas da sua empresa.
                    </p>
                    <div class="mt-4">
                        <a href="https://yannis.com.br" class="btn btn-primary me-3 mb-4" target="_blank">Acesse o Yannis</a>
                        <a href="/#contato" class="btn btn-outline-primary mb-4">Solicite uma demonstração</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-left">
                <img src="/img/site/dashboard.png" class="img-fluid" alt="Yannis ERP">
            </div>
        </div>
    </div>
</section>

<!-- Depoimentos Section -->
<section id="depoimentos" class="testimonials-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2>O que nossos clientes dizem</h2>
            <p>Empresas que transformaram sua gestão com o Yannis</p>
        </div>
        <div class="testimonial-slider" data-aos="fade-up">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>Trabalho com a empresa Giusti Sistemas há mais de 20 anos, um atendimento impecável. 
                                Desenvolvemos o sistema da minha empresa dentro das minhas necessidades. Foi muito bom. 
                                Só tenho elogios a empresa como um todo, sobretudo no relacionamento humano.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="/img/site/clients/client-1.webp" alt="Cliente" class="testimonial-img">
                                <div class="author-info">
                                    <h4>Patrícia Matarazzo</h4>
                                    <p>Miniterras Agropastoril</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>A Giusti Sistemas é uma empresa de tecnologia que se destaca pela sua competência e comprometimento, 
                                tem se consolidado como uma referência na área, oferecendo soluções inovadoras e personalizadas para atender às 
                                necessidades de cada cliente. Parabéns pela excelência nos serviços prestados e por buscar o 
                                melhor para seus clientes!</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="/img/site/clients/client-2.webp" alt="Cliente" class="testimonial-img">
                                <div class="author-info">
                                    <h4>José Eduardo Siqueira</h4>
                                    <p>Free Hobby</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>Há mais de 25 anos, temos sido clientes e parceiros da Giusti Sistemas, confiando em sua capacidade de fornecer 
                                sistemas e soluções essenciais para o nosso negócio. Sua eficiência exemplar e suporte técnico excepcional têm sido 
                                fundamentais para impulsionar nosso sucesso contínuo. Com confiança, recomendamos a Giusti Sistemas a todas as empresas 
                                em busca de uma parceria sólida e resultados excelentes.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="/img/site/clients/client-3.webp" alt="Cliente" class="testimonial-img">
                                <div class="author-info">
                                    <h4>Wagner Garcia</h4>
                                    <p>Wagner Calçados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>O Yannis é uma verdadeira mão na roda! Ele nos ajuda a manter a organização da empresa, com controle de estoque e 
                                emissão de notas fiscais simplificada. O controle financeiro também é muito fácil de usar e nos ajuda a manter as finanças em dia. 
                                Além disso, a equipe de suporte sempre está pronta para ajudar, o que nos dá ainda mais segurança para continuar utilizando o serviço. 
                                Agradecemos à empresa pela excelência no atendimento e pela qualidade do serviço prestado há mais de 20 anos.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="/img/site/clients/client-4.webp" alt="Cliente" class="testimonial-img">
                                <div class="author-info">
                                    <h4>José Luiz Cardoso</h4>
                                    <p>Descask Distribuidora</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>A equipe é excelente, nos ajudam de maneira rápida e eficaz, sanando qualquer dúvida ou problema que surja. 
                                Além disso, a facilidade de uso do sistema é um diferencial, proporcionando um controle completo sobre nossas operações diárias, 
                                com o gerenciamento de estoque, controle de condicionais e emissão de cupons fiscais.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="/img/site/clients/client-5.webp" alt="Cliente" class="testimonial-img">
                                <div class="author-info">
                                    <h4>Victor Garcia</h4>
                                    <p>Fitwod</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls text-center">
                    <button class="carousel-nav-btn" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                    </button>
                    <button class="carousel-nav-btn" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contato Section -->
<section id="contato" class="section-bg">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Entre em contato</h2>
            <p>Estamos prontos para atender você</p>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
                <div class="info">
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4>Telefone</h4>
                            <a href="tel:+5517991574635" target="_blank">(17) 99157-4635</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:contato@giustisistemas.com.br" target="_blank">contato@giustisistemas.com.br</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h4>Whatsapp</h4>
                            <a href="https://api.whatsapp.com/send/?phone=5517991574635&text&type=phone_number&app_absent=0" target="_blank">(17) 99157-4635</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fab fa-facebook"></i>
                        <div>
                            <h4>Facebook</h4>
                            <a href="https://www.facebook.com/giustisistemas" target="_blank">Giusti Sistemas</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fab fa-instagram"></i>
                        <div>
                            <h4>Instagram</h4>
                            <a href="https://www.instagram.com/giustisistemas" target="_blank">Giusti Sistemas</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fab fa-linkedin"></i>
                        <div>
                            <h4>Linkedin</h4>
                            <a href="https://www.linkedin.com/giustisistemas" target="_blank">Giusti Sistemas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
                <form id="contact-form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fullName">Nome</label>
                            <input type="text" name="fullName" class="form-control" id="fullName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" name="message" id="message" rows="13" required>Gostaria de solicitar um orçamento.</textarea>
                    </div>
                    <div class="text-center mt-3"><button type="submit" class="btn btn-primary">Enviar mensagem</button></div>
                    <div class="d-none mt-3" id="contact-form-messages">
                        <div class="loading" id="loading">Carregando...</div>
                        <div class="error-message" id="error-message">Erro...</div>
                        <div class="sent-message" id="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                    </div>
                    <input type="text" name="g-recaptcha-response" id="g-recaptcha-response" hidden />
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
