<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\BlogService;
use App\Http\Requests\Site\BlogRequest;

class BlogController extends Controller {
    public function __construct(
        private readonly BlogService $blogService
    ) {}

    public function view(BlogRequest $request, string $key = "") {
        $search = $request->validated('search') ?? '';
        $category = $request->validated('category') ?? '';
        $postsPerPage = 3;
        $recentPostsPerPage = $postsPerPage * 5;

        $categories = $this->blogService->getCategories();
        $recentPosts = $this->blogService->getRecentPosts($recentPostsPerPage);
        $postKey = $key ? $this->blogService->getPostByKey($key) : null;

        if ($key && !$postKey) {
            abort(404);
        }

        $posts = $search
            ? $this->blogService->searchPosts($postsPerPage, $search, $category) 
            : $this->blogService->getAllPosts($postsPerPage, $category);

        if ($postKey) {
            return view('site.artigo', [
                'posts' => $posts,
                'postKey' => $postKey,
                'recentPosts' => $recentPosts,
                'categories' => $categories,
            ]);
        }

        return view('site.blog', [
            'posts' => $posts,
            'search' => $search,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
