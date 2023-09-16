<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(): View|Application|Factory
    {
        return view('home', [
            'articles' => Article::query()->latest()->limit(6)->with('categories')->get()
        ]);
    }
}
