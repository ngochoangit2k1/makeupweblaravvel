<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  
    public function index()
    {
        $news = News::all();

        return view('layout/blog.index', compact('news'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $news = new News;

        $news->title = $request->title;
        $news->content = $request->content;

        $news->save();

        return redirect()->route('blog.index');
    }

    public function edit(News $news)
    {
        return view('blog.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->title = $request->title;
        $news->content = $request->content;

        $news->save();

        return redirect()->route('blog.index');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('blog.index');
    }
}
