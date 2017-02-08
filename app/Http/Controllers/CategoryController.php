<?php

namespace App\Http\Controllers;

use App\Category;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    protected $catsPerPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate($this->catsPerPage);
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values = $request->all();

        $validator = Validator::make($values, [
            'cname' => 'required',
        ]);

        if ($validator->fails()) {
            // var_dump($validator->errors());
            return redirect('password')
                ->withErrors($validator)
                ->withInput();
        } else {
            $name = $values['cname'];
            if($values['slug']) {
                $slug = $values['slug'];
            } else {
                $slug = Category::slugify($name);
            }
            Category::create(['name' => $name, 'slug' => $slug]);

            return redirect('category')->with('Addition Successful');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
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
        $category = Category::findOrFail($id);
        $category->name = $values['cname'];
        $category->slug = $values['slug'];
        $category->save();
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        Cache::flush();
        return redirect('category');
    }
}
