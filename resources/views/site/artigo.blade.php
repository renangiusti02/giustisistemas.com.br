@extends('site.layouts.main')

@section('title', $postKey->Titulo . ' - Blog - Giusti Sistemas')

@push('styles')
<!-- Custom CSS -->
<link rel="stylesheet" href="/css/site/styles.min.css">
<link rel="stylesheet" href="/css/site/blog.min.css">
<link rel="stylesheet" href="/css/site/artigo.min.css">
@endpush

@section('content')
<!-- Article Hero Section -->
<section id="article-hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/img/site/blog/{{ $postKey->Key }}.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="zoom-in">
                <h1>{{ $postKey->Titulo }}</h1>
                <div class="article-meta">
                    <span><i class="far fa-calendar"></i> {{ date('d/m/Y', strtotime($postKey->Data)) }}</span>
                    <span><i class="far fa-folder"></i> {{ $postKey->Categoria }}</span>
                    <span><i class="far fa-user"></i> Por Giusti Sistemas</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section id="article-content" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="py-3" data-aos="fade-right">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $postKey->Titulo }}</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Search Bar -->
                <form class="search-bar d-flex input-group mb-4" data-aos="fade-right">
                    <input class="form-control" type="search" placeholder="Pesquisar artigos..." aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Article -->
                <article class="blog-article mb-5" data-aos="fade-up">
                    <div class="article-image">
                        <img src="/img/site/blog/{{ $postKey->Key }}.jpg" alt="{{ $postKey->Titulo }}" class="img-fluid">
                    </div>
                    <div class="article-content">
                        {!! $postKey->HTML !!}

                        <div class="article-share">
                            <span>Compartilhe:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/blog/' . $postKey->Key)) }}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url('/blog/' . $postKey->Key)) }}&text={{ urlencode($postKey->Titulo) }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url('/blog/' . $postKey->Key)) }}&title={{ urlencode($postKey->Titulo) }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://wa.me/?text={{ urlencode(url('/blog/' . $postKey->Key)) }}%0A{{ urlencode($postKey->Titulo) }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Categories -->
                <div class="sidebar-widget mb-4" data-aos="fade-left">
                    <h3>Categorias</h3>
                    <ul class="list-unstyled">
                        @foreach($categories as $cat)
                            <li><a href="/blog?category={{ $cat->Categoria }}">{{ $cat->Categoria }} ({{ $cat->count }})</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="sidebar-widget mb-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>Posts recentes</h3>
                    <ul class="list-unstyled">
                        @foreach($recentPosts as $post)
                            <li>
                                <a href="/blog/{{ $post->Key }}">
                                    <h5>{{ $post->Titulo }}</h5>
                                    <span>{{ date('d/m/Y', strtotime($post->Data)) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<!-- Custom JS -->
<script src="/js/site/main.min.obf.js"></script>
@endpush
