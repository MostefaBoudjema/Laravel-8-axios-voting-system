<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RipRequest extends FormRequest
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
            'rip_name'=> 'max:255',
            'rip_number'=> 'size:20|required|starts_with:0079999900',
            'rip_phone'=> 'max:25',
            // 'rip_email'=> 'sometimes|email',
        ];
    }
}
