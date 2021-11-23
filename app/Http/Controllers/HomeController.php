<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Home",
            "books" => Detail::all(),
            "categories" => Category::all()
        ]);
    }
}
