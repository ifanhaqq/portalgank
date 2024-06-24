<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $articles = Article::get();
        
        $data = [
            'articles' => $articles
        ];

        return view('pages.guest.landing-page', $data);
    }
}
