<?php

namespace ocorea\Http\Requests;

use ocorea\Http\Requests\Request;

class CreateClientRequest extends Request
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
            'var_name' => 'required',
            'var_email' => 'required|unique:clients,var_email',
        ];
    }
}