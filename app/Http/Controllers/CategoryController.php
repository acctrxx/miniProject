<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        $articles = Article::all();
        $users = User::all();
        return view('categories.index', compact('data', 'articles', 'users'));
    }

    public function create()
    {
        $data = Category::all();
        return view('categories.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $data = Category::findorfail($id);
        return view('categories.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Category::find($id);

        $request->validate([
            'name' => 'required',
        ]);

        $data->update($request->all());
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $data = Category::findorfail($id);
        $data->delete();
        return back();
    }
}
