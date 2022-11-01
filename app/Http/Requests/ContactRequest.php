<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PostCodeRule;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'fullname' =>'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => ['required','min:8', new PostCodeRule()],
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '名前を入力してください',
            'last_name.required' => '苗字を入力してください',
            'fullname.required' => '名前を入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メール形式で入力してください。',
            'postcode.required' => '郵便番号を入力してください。',
            'postcode.min' => '郵便番号は8文字で入力してください。',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',   
            'opinion.max' => 'ご意見は120文字以内で入力してください',
        ];
    }
}
