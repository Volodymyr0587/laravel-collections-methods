<?php

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index']);


Route::get('/result', function () {

    // $collection = collect([
    //     ['name' => 'Alex', 'age' => 27],
    //     ['name' => 'Dary', 'age' => 27],
    //     ['name' => 'John', 'age' => 43],
    //     ['name' => 'Mike', 'age' => 22],
    // ]);

    // return $collection->where('age', '>', 22);

    // return Article::where('is_published', true)
    //     ->where('min_to_read', 9)
    //     ->get();

    // return Article::where(function ($query) {
    //     return $query->where('is_published', true);
    // })->get();

    // return $collection->whereStrict('name', 'Dary');

    // return Article::whereBetween('created_at', [
    //     '2024-09-16',
    //     '2024-09-20'
    // ])->where('min_to_read', '>', 5)
    //     ->get();

    // return Article::whereNull('excerpt')->count();
    // return Article::whereNotNull('excerpt')->count();

    // return Article::whereDate('created_at', '2024-09-20')->get();
    // return Article::whereDay('created_at', 18)->get();
    // return Article::whereMonth('created_at', 8)->get();
    // return Article::whereYear('created_at', 2022)->get();
    // return Article::whereTime('created_at', '>=', '09:00:00')
    //     ->whereTime('created_at', '<=', '17:00:00')
    //     ->count();


    // $collection = collect([
    //     1, 2, 3, 4, '', 0, 'Volodymyr', null, false, []
    // ]);

    // return $collection->filter(function ($value, $key) {
    //     return $value > 2 && $key < 7;
    // });

    // return $collection->reject(function ($value, $key) {
    //     return empty($value);
    // });

    // $articles = Article::where('is_published', true)->get();
    // return $articles->filter(function ($article) {
    //     return $article->min_to_read > 8;
    // });

    // $articles = Article::all();
    // return $articles->reject(function ($article) {
    //     return empty($article->excerpt);
    // });

    // return $collection->contains(3);

    // $collection = collect([
    //     'name' => 'Kevin de Bruyne',
    //     'age' => 31,
    //     'club' => 'Manchester City',
    // ]);

    // // return $collection->except('age', 'club');
    // return $collection->only('name');

    // $players = collect([
    //     [
    //         'name' => 'Lionel Messi',
    //         'position' => 'Forward'
    //     ],
    //     [
    //         'name' => 'Kylian Mbappe',
    //         'position' => 'Forward'
    //     ],
    //     [
    //         'name' => 'Neymar Jr.',
    //         'position' => 'Forward'
    //     ],
    // ]);

    // $mapped = $players->map(function ($player) {
    //     $player['team'] = 'PSG';
    //     return $player;
    // });

    // return $mapped;

    // $articles = Article::with('user')
    //     ->get()
    //     ->map(function($article) {
    //         return [
    //             'id' => $article->id,
    //             'title' => $article->title,
    //             'created_at' => $article->created_at->format('m/d/Y'),
    //             'user_name' => $article->user->name,
    //             'user_email' => $article->user->email
    //         ];
    //     });
    // return $articles;

    // return Article::with('user')->get()->mapWithKeys(function ($article) {
    //     return [
    //         $article->id => [
    //             'title' => $article->title,
    //             'created_at' => $article->created_at->format('m/d/Y'),
    //             'user_name' => $article->user->name,
    //             'user_email' => $article->user->email
    //         ]
    //     ];
    // });

    // $articles = Article::pluck('title');
    // return $articles;

    // $articles = Article::all();
    // return $articles->keyBy('title');

    // $collection = collect([
    //     1, 2, 3, 4, '', 0, 'Volodymyr', null, false, []
    // ]);

    // $collection->push(6, 7, 8, 'laravel', [1, 2, 3]);

    // $collection->put('name', 'John Doe');

    // $collection->forget('name');

    // $removed = $collection->pop();

    // $shifted = $collection->shift();

    // return $shifted;

    //%concat
    // $collection1 = collect([
    //     'Barcelona', 'London'
    // ]);

    // $collection2 = collect([
    //     'Amsteram', 'Berlin'
    // ]);

    // $combined = $collection1->concat($collection2);

    // return $combined;

    //%zip
    //  $capitals = collect([
    //     'Barcelona', 'London', 'Kyiv'
    // ]);

    // $countries = collect([
    //     'Spain', 'United Kindom', 'Ukraine'
    // ]);

    // $ziped = $capitals->zip($countries);

    // return $ziped;

    // $orders = collect([
    //     [
    //         'id' => 1,
    //         'items' => [
    //             ['name' => 'Widget', 'price' => 10],
    //             ['name' => 'Gizmo', 'price' => 5]
    //         ]
    //     ],
    //     [
    //         'id' => 2,
    //         'items' => [
    //             ['name' => 'Thing', 'price' => 15],
    //             ['name' => 'Doodad', 'price' => 20]
    //         ]
    //     ],
    // ]);

    // //% collapse()
    // $items = $orders->pluck('items')->collapse();

    //% split()
    // $posts = collect([
    //     ['title' => 'Post 1', 'body' => 'test'],
    //     ['title' => 'Post 2', 'body' => 'test'],
    //     ['title' => 'Post 3', 'body' => 'test'],
    //     ['title' => 'Post 4', 'body' => 'test'],
    //     ['title' => 'Post 5', 'body' => 'test'],
    //     ['title' => 'Post 6', 'body' => 'test'],
    //     ['title' => 'Post 7', 'body' => 'test'],
    //     ['title' => 'Post 8', 'body' => 'test'],
    //     ['title' => 'Post 9', 'body' => 'test'],
    //     ['title' => 'Post 10', 'body' => 'test'],
    // ]);

    // $chunks = $posts->split(5);
    // return $chunks;

    // //% sort and sortDesc
    // $collection = collect([
    //     3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5
    // ]);

    // //%sort
    // // $sorted = $collection->sort();
    // // return $sorted->values()->all();

    // $sortedByDesc = $collection->sortDesc();
    // return $sortedByDesc->values()->all();

    $collection = collect([
        ['name' => 'Dary', 'age' => 27],
        ['name' => 'John', 'age' => 30],
        ['name' => 'Jane', 'age' => 25],
    ]);

    //% sortBy
    $sortedBy = $collection->sortBy('age');
    // return $sortedBy->values()->all();

    //% sortByDesc
    $sortedByDesc = $collection->sortByDesc('age');
    // return $sortedByDesc->values()->all();

    //% sortKeys
    $sorted = $collection->sortKeys();
    // return $sorted;

    //% sortKeyByDesc
    $sorted = $collection->sortKeysDesc();
    return $sorted->values()->all();

});


Route::get('/users', function () {
    $roles = [
        'admin', 'super_admin',
    ];

    //% whereIn
    // return User::whereIn('role', $roles)->count();
    //% whereNotIn
    return User::whereNotIn('role', $roles)
        ->where('name', 'LIKE', "B%")
        ->count();
});
