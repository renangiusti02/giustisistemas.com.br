<?php

namespace App\Repositories\Site;

use Illuminate\Pagination\LengthAwarePaginator;

interface BlogRepositoryInterface {
    public function getPostByKey(string $key): ?object;
    public function searchPosts(int $postsPerPage, string $search, string $category): LengthAwarePaginator;
    public function getAllPosts(int $postsPerPage, string $category): LengthAwarePaginator;
    public function getRecentPosts(int $postPerPage): ?object;
    public function getCategories(): ?object;
}
