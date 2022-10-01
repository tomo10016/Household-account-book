<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncomeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'income.date' => 'required',
            'income.category_id' => 'required',
            'income.money' => 'required|numeric',
        ];
    }
}
