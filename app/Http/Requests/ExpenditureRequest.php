<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenditureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'expenditure.date' => 'required',
            'expenditure.nominal' => 'required|string|max:20',
            'expenditure.bigcategory_id' => 'required',
            'expenditure.smallcategory_id' => 'required',
            'expenditure.money' => 'required|numeric',
            'expenditure.shop' => 'required|max:30',
            'expenditure.method_id'=> 'required',
        ];
    }
}
