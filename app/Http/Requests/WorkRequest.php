<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WorkRequest extends FormRequest
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
            'type' => 'required',
            'client_name' => 'required',
            'arc_name' => 'required',
            'size' => 'required|numeric',
            'description' => 'required',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'name' => 'required|unique:works,name',
                'files' => 'required',
            ];
        } else {
            $rules += [
                'name' => [
                    'required',
                    Rule::unique('works')->ignore($this->segment(3)),
                ],
                'status' => 'required',
            ];
        }

        return $rules;
    }
}