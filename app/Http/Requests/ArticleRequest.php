<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:5|max:200',
            'content' => 'required',
            'image_file' => 'required',
            'user_id' => 'required',
            'category_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title required to fill in',
            'title.string' => 'Title must fill in with text',
            'title.min' => 'Title required to fill in minimum 5 letters',
            'title.max' => 'Title required to fill in maximum 200 letters',
            'content.required' => 'Content required to fill in',
            'image_file.required' => 'Image required to fill in',
            'user_id.required' => 'Writer required to fill in',
            'category_id.required' => 'Category required to fill in',
        ];
    }
}
