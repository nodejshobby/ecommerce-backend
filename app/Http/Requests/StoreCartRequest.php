<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
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
            'cart' => 'required',
            'cart.*.product_id' => 'required',
            'cart.*.quantity' => 'required',
            'cart.*.price' => 'required',
            'cart.*.title' => 'required'
        ];
    }
}
