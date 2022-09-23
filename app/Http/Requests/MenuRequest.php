<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'menu' => 'required',
            'target' => 'integer|required',
            'achieve' => 'integer|required',
            'date' => 'date|required',
        ];
    }

    public function messages()
    {
        return[
            'menu.required' => 'メニューを整数でご入力ください。',
            'target.required' => '目標回数は必ず入力してください。',
            'achieve.required' => '達成回数は必ず入力してください。',
            'date.required' => '日付は必ず入力してください。',
            'target.integer' => '目標回数をを整数で入力してください。',
            'achieve.integer' => '達成回数を整数で入力してください。',
            'date.date' => '日付を入力してください。'
        ];
    }
}
