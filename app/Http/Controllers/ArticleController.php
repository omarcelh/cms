<?php

namespace App\Http\Controllers;

use Cache;
use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    protected $artsPerPage = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate($this->artsPerPage);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo_filename = $request->file('photo')->store('img', 'public');
        $values = $request->all();
        Article::create([
            'title' => $values['title'],
            'photo_filename' => $photo_filename,
            'slug' => $values['slug'],
            'source' => $values['source'],
            'excerpt' => $values['excerpt'],
            'content' => $values['content'],
            'category_id' => $values['category-id'],
        ]);

        return redirect(url('article'))->with('status', 'Article has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->get()->first();
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $values = $request->all();
        $article = Article::findOrFail($id);

        if($request->file('photo') !== null) {
            $article->photo_filename = $request->file('photo')->store('img', 'public');
        }
        $article->title = $values['title'];
        $article->slug = $values['slug'];
        $article->source = $values['source'];
        $article->excerpt = $values['excerpt'];
        $article->content = $values['content'];
        $article->category_id = $values['category-id'];

        $article->save();

        return redirect(url('article'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        Cache::flush();
        return redirect('article');
    }

    /**
     * View all articles
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $articles = Article::paginate($this->artsPerPage);
        return view('article.view', compact('articles'));
    }
}
