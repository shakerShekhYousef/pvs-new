<?php

namespace App\Http\Requests\dashboard\Car;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'maker' => ['required', 'string'],
            'model' => ['required', 'string'],
            'year' => ['required', 'string'],
            'regional_specs' => ['required', 'string'],
            'color' => ['required', 'string'],
            'interior_color' => ['required', 'string'],
            'no_cylinders' => ['required', 'numeric'],
            'transmission_type' => ['required', 'string'],
            'fuel_type' => ['required', 'string'],
            'extras' => ['required', 'string'],
            'whatsapp_uae' => ['required', 'string'],
            'whatsapp_africa' => ['required', 'string'],
            'price_aed' => ['required', 'numeric'],
            'price_africa' => ['required', 'numeric'],
            'price_dealer_aed' => ['required', 'numeric'],
            'price_dealer_africa' => ['required', 'numeric'],
            'image' => ['required', 'mimes:jpg,png,jpeg,gif,webp', 'max:1024'],
            'description' => ['nullable', 'string'],
            'car_images.*' => ['nullable', 'mimes:jpg,png,jpeg,gif,webp', 'max:1024'],
        ];
    }
    
    public function messages()
    {
        return [
            'car_images.*.max' => 'Please size of each image must be smaller than 1 MegaByte.',
        ];
    }
    
}
