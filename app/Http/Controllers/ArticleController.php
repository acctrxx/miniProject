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
        $data = Article::with('user', 'category')->get();
        return view('articles.index', compact('data'));
    }

    public function show($id)
    {
        $data = Article::findorfail($id);
        $users = User::all();
        $categories = Category::all();
        return view('articles.show', compact('data', 'categories', 'users'));
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
            $image_file = $this->uploadImage($request->file('image_file'));
            // $image_file = $request->file('image_file')->store('img', 'public');
            $request->merge([
                'image' => $image_file
            ]);
            Article::create($request->all());
            return redirect()->route('article.index');
            }

    public function edit($id)
    {
        $data = Article::findorfail($id);
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

        // Code for delete image if exsist
        $img_path = public_path('profile/' . $data->image);
        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $image_file = $this->uploadImage($request->file('image_file'));
        $request->merge([
            'image' => $image_file
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
    public function uploadImage($image)
    {
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
    }
}
