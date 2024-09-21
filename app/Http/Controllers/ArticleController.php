<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $count = Article::count();
        $where = Article::where('is_published', true)->count();
        $countBy = Article::pluck('user_id')->countBy();
        $max = Article::max('min_to_read');
        $maxWithWhereBetween = Article::whereBetween('user_id', [20, 30])->max('min_to_read');
        $min = Article::min('min_to_read');
        $median = Article::pluck('min_to_read')->median();
        $mode = Article::pluck('user_id')->mode();
        $mostCommonUserID = Article::where('is_published', true)->pluck('user_id')->mode();
        // $inRandomOrder = Article::inRandomOrder()->first();
        $inRandomOrder = Article::inRandomOrder()->value('title');
        $sum = Article::sum('min_to_read');


        return view('articles.index', compact(
            'count',
            'where',
            'countBy',
            'max',
            'maxWithWhereBetween',
            'min',
            'median',
            'mode',
            'mostCommonUserID',
            'inRandomOrder',
            'sum',
        ));
    }
}
