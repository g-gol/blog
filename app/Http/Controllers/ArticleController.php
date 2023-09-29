<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View|Application|Factory
    {
        $articles = Article::query()->select('id', 'thumbnail', 'title', 'slug')->latest()->with('categories:name')->paginate(6);

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show(Article $article): View|Application|Factory
    {
        return view('articles.show', ['article' => $article]);
    }
}
