@extends('site.layouts.main')

@php($activeMenu = 'blog')

@section('title', 'Blog - Giusti Sistemas')

@push('styles')
<!-- Custom CSS -->
@vite(['resources/css/site/blog.css'])
@endpush

@section('content')
<!-- Blog Hero Section -->
<section id="blog-hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="zoom-in">
                <h1>Blog</h1>
                <p>Artigos e novidades sobre ERP, negócios, tecnologia e mais</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section id="blog-content" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="py-3" data-aos="fade-right">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                @if (!empty($search) && !empty($category))
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item"><a href="/blog?category={{ $category }}">{{ $category }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resultados da busca para "{{ $search }}"</li>
                @elseif (!empty($search))
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resultados da busca para "{{ $search }}"</li>
                @elseif (!empty($category))
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category }}</li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                @endif
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content -->
            <div class="col-xl-8">
                <!-- Search Bar -->
                <form action="/blog" method="get" class="search-bar d-flex input-group mb-4" data-aos="fade-right">
                    <input class="form-control" type="text" name="search" placeholder="Pesquisar artigos..." aria-label="Search" value="{{ $search }}">
                    <input type="hidden" name="category" value="{{ $category }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Articles -->
                <div class="articles">
                    @foreach($posts as $post)
                        <article class="blog-article mb-5" data-aos="fade-up">
                            <a href="/blog/{{ $post->Key }}" class="article-link">
                                <div class="article-image">
                                    <img src="/img/site/blog/{{ $post->Key }}.jpg" alt="{{ $post->Titulo }}" class="img-fluid">
                                </div>
                                <div class="article-content">
                                    <h2>{{ $post->Titulo }}</h2>
                                    <div class="article-meta">
                                        <span><i class="far fa-calendar"></i> {{ date('d/m/Y', strtotime($post->Data)) }}</span>
                                        <span><i class="far fa-folder"></i> {{ $post->Categoria }}</span>
                                    </div>
                                    <p>{{ $post->Descricao }}</p>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if ($posts->hasPages())
                    <div class="d-flex justify-content-center" data-aos="fade-up">
                        {{ $posts->links('site.partials.pagination') }}
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-xl-4">
                <!-- Categories -->
                <div class="sidebar-widget mb-4" data-aos="fade-left">
                    <h3>Categorias</h3>
                    <ul class="list-unstyled">
                        @foreach($categories as $cat)
                            <li><a href="/blog?category={{ $cat->Categoria }}{{ !empty($search) ? '&search=' . $search : '' }}">{{ $cat->Categoria }} ({{ $cat->count }})</a></li>
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
@endpush
