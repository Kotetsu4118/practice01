<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "post.title" => "required | max:40",
            "post.body" => "required | max:4000",
        ];
    }
    
    public function messages()
    {
        return [
            "title.required" => "タイトルは必須項目です",
            "title.max" => "タイトルの入力は40文字までです",
            "body.required" => "本文は必須項目です",
            "body.max" => "本文の入力は400文字までです",
        ];
    }
}
