<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();
        $users = User::all();
        $categories = Category::all();
        return view('articles.index', compact('data', 'categories', 'users'));
    }

    public function create()
    {
        $data = Article::all();
        $users = User::all();
        $categories = Category::all();
        return view('articles.create', ['data' => $data, 'categories' => $categories, 'users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_file' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            ]);
            $image = $request->file('image_file');
            $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
            $image->move(public_path('profile'), $new_name_image);
            $request->merge([
                'image' => $new_name_image
            ]);
            Article::create($request->all());
            return redirect()->route('article.index');
            }

    public function edit($id)
    {
        $data = Article::all();
        $users = User::all();
        $categories = Category::all();
        return view('articles.edit', compact('data', 'categories', 'users'));
    }

    public function update(Request $request, $id)
    {
        $data = Article::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_file' => 'required',
            'user_id' => 'required',
            'category_id' => 'required'
        ]);

        $data->update($request->all());
        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $data = Article::findorfail($id);
        $data->delete();
        return back();
    }
}
