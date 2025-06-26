<?php

namespace App\Services\Site;

use App\Repositories\Site\BlogRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogService {
    public function __construct(
        private readonly BlogRepositoryInterface $blogRepository
    ) {}

    public function getPostByKey(string $key): ?object {
        return $this->blogRepository->getPostByKey($key);
    }

    public function searchPosts(int $postPerPage, string $search, string $category): LengthAwarePaginator {
        return $this->blogRepository->searchPosts($postPerPage, $search, $category);
    }

    public function getAllPosts(int $postPerPage, string $category): LengthAwarePaginator {
        return $this->blogRepository->getAllPosts($postPerPage, $category);
    }

    public function getRecentPosts(int $postPerPage): ?object {
        return $this->blogRepository->getRecentPosts($postPerPage);
    }   

    public function getCategories(): ?object {
        return $this->blogRepository->getCategories();
    }   
}
