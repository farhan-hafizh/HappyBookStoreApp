<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    public function show($id){
        return view('category',[
            'title' => 'Category',
            'categories' => Category::all(),
            'books' => collect(Detail::join('books','details.book_id','=','books.id')
            ->join('categories','books.category_id','=','categories.id')
            ->where('books.category_id',$id)
            ->get(['details.*','books.*','categories.category']))
        ]);  
    }
}
