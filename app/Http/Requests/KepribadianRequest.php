<?php

namespace dev\Http\Requests;

use dev\Http\Requests\Request;

class KepribadianRequest extends Request
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
            //

        ];
    }

    public function messages()
    {
        return [
     

        ];
    }
}
