<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        $articles = Article::all();
        $categories = Category::all();
        return view('users.index', compact('data', 'articles', 'categories'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:8|max:25',
            'email' => 'required|min:8|max:25|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8|max:25|confirmed',
            'image_file' => 'required'
        ]);
        $image = $request->file('image_file');
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        $request->merge([
            'image' => $new_name_image
        ]);
        User::create($request->all());
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $data = User::findorfail($id);
        return view('users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        
        $request->validate([
            'name' => 'required|min:8|max:25',
            'email' => 'required|min:8|max:25|email:rfc,dns|unique:users,email',
            'current_password' => 'required',
            'password' => 'required|min:8|max:25|confirmed',
            'image_file' => 'required'
        ]);
        $image = $request->file('image_file');
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        $request->merge([
            'image' => $new_name_image
        ]);
        $img_path = public_path('profile/' . $data->image);
        if (file_exists($img_path)) {
            unlink($img_path);
        }
        // if ($request->current_password == $data->password) {
        //     $data->update($request->all());
        // } else {
        //     return redirect()->back();
        // }
        $data->update($request->all());
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $data = User::findorfail($id);
        $data->delete();
        $this->removeImage($data->image);
        return back();
    }
    
    public function uploadImage($image)
    {
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
    }
    
    public function removeImage($image)
    {
        if (file_exists($image)) {
            unlink('profile/' . $image);
        }
    }
}
