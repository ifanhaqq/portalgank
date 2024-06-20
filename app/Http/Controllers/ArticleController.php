<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::get();

        $data = [
            'articles' => $articles
        ];

        return view('pages.user.kategori', $data);
    }

    public function article()
    {
        $articles = Article::get();

        $data = [
            'articles' => $articles
        ];

        return view('pages.admin.artikel', $data);
    }

    public function store(Request $request)
    {
        $article = new Article();
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $imageName;

        $article->save();
        $image->storeAs('public/image', $imageName);

        return redirect()->route('artikel');
        
    }
}
