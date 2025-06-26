<?php

namespace App\Repositories\Site;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogRepository implements BlogRepositoryInterface {
    public function getPostByKey(string $key): ?object {
        return DB::connection('sistema')->table('blog_artigos')
            ->where('Key', $key)
            ->first();
    }

    public function searchPosts(int $postPerPage, string $search, string $category): LengthAwarePaginator {
        $query = DB::connection('sistema')->table('blog_artigos')
            ->where(function($query) use ($search) {
                $query->where('Titulo', 'like', "%$search%")
                    ->orWhere('Descricao', 'like', "%$search%");
            });

        if (!empty($category)) {
            $query->where('Categoria', $category);
        }

        return $query->orderByDesc('Data')
            ->paginate($postPerPage)
            ->withQueryString();
    }

    public function getAllPosts(int $postPerPage, string $category): LengthAwarePaginator {
        $query = DB::connection('sistema')->table('blog_artigos');

        if (!empty($category)) {
            $query->where('Categoria', $category);
        }

        return $query->orderByDesc('Data')
            ->paginate($postPerPage)
            ->withQueryString();
    }

    public function getRecentPosts(int $postPerPage): ?object {
        return DB::connection('sistema')->table('blog_artigos')
            ->orderByDesc('Data')
            ->limit($postPerPage)
            ->get();
    }

    public function getCategories(): ?object {
        return DB::connection('sistema')->table('blog_artigos')
            ->select('Categoria', DB::raw('count(*) as count'))
            ->groupBy('Categoria')
            ->orderBy('Categoria')
            ->get();
    }
}
