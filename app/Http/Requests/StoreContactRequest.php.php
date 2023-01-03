<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //バリデーションを有効にする
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() //バリデーションのルールの設定
    {
        return [
            'name' => ['required','string','max:20'],
            'title' => ['required','string','max:50'],
            'email' => ['required','email','max:255'],
            'url' => ['url','nullable'],
            'gender' => ['required','boolean'],
            'age' => ['required'],
            'contact' => ['required','string','max:200'],
            'caution' => ['required','accepted']
        ];
    }
}
