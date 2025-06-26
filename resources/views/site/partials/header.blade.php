<!-- Header -->
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/#">
                <img src="/img/site/logo.png" alt="Giusti Sistemas" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link scrollto{{ ($activeMenu === 'home') ? ' active' : '' }}" href="/#hero">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/#yannis">Yannis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/#depoimentos">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="/#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto{{ ($activeMenu === 'blog') ? ' active' : '' }}" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
