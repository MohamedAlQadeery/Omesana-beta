<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequirementRequest extends FormRequest
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
        $rules = [
            'options.*.option_name' => 'required',
            'type' => 'required',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'name' => 'required|unique:requirements,name',
            ];
        } else {
            $rules += [
                'name' => [
                    'required',
                    Rule::unique('requirements')->ignore($this->segment(3)),
                ],
            ];
        }

        return $rules;
    }
}