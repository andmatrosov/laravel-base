<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => [
                'required',
                'email',
                Rule::unique('workers')->ignore($this->worker->id)
            ],
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это обязательное поле',
            'surname.required' => 'Это обязательное поле',
            'email.required' => 'Это обязательное поле',
            'email.email' => 'Укажите корректный email',
            'email.unique' => 'Данный email уже используется'
        ];
    }
}
