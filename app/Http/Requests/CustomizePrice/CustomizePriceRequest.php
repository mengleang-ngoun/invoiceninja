<?php

namespace App\Http\Requests\CustomizePrice;

use App\Http\Requests\Request;
use App\Models\CustomizePrice;

class CustomizePriceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->can('create', CustomizePrice::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules['price'] = 'numeric';
        return $rules;
    }

    public function prepareForValidation()
    {
        $input = $this->all();

        if (array_key_exists('client_id', $input) && is_string($input['client_id'])) {
            $input['client_id'] = $this->decodePrimaryKey($input['client_id']);
        }

        if (array_key_exists('product_id', $input) && is_string($input['product_id'])) {
            $input['product_id'] = $this->decodePrimaryKey($input['product_id']);
        }

        $this->replace($input);
    }
}