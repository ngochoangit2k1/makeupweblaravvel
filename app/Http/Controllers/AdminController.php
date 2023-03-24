<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $news = News::all();
    return view('admin.index', ['news' => $news]);
}

}
