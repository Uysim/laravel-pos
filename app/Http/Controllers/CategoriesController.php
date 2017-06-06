<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        return view('categories.index', [
            'categories'=>$categories
        ]);
    }

    public function create()
    {
        return view('categories.create', ['category'=>new Category]);
    }

    public function store(Request $request){
        $category = new Category;
        $validator = $this->validate($request, $category->rules);
        if($validator){
            return view('categories.create')->withErrors($validator);
        }
        $input = $request->all();
        $category = $category::create($input);
        return redirect()->route('categories.show', ['category'=>$category]);
    }


    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validator = $this->validate($request, $category->rules);
        if($validator){
            return view('categories.edit')->withErrors($validator);
        }
        $input = $request->all();
        $category->update($input);
        return redirect()->route('categories.show', ['category'=>$category]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
