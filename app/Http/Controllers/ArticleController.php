<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $image = $request->file('file');

        $imageName = $image->getClientOriginalName();

        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $imageName;

        $article->save();
        $image->storeAs('public/img', $imageName);

        return redirect()->route('artikel');

    }

    public function edit($id)
    {
        $artikel = Article::where('id', $id)->first();

        $data = [
            'article' => $artikel
        ];

        return view('pages.admin.artikel-edit', $data);
    }

    public function update(Request $request, $id)
    {

        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->file('file')) {
            if (Storage::exists("public/img/$article->image")) {
                Storage::delete("public/img/$article->image");
            }

            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $article->image = $imageName;
            $image->storeAs('public/img', $imageName);
        }

        $article->save();

        return redirect()->route("edit-article", $article->id);
    }

    public function delete($id)
    {
        $article = Article::find($id);

        if (Storage::exists("public/img/$article->image")) {
            Storage::delete("public/img/$article->image");
        }

        $article->delete();

        return redirect()->route('artikel');
    }
}
