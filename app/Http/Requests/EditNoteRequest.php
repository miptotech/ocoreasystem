<?php
/**
 * Created by PhpStorm.
 * User: Julio Yepez
 * Date: 1/27/2016
 * Time: 10:34 PM
 */

namespace ocorea\Http\Requests;

use ocorea\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditNoteRequest extends Request
{
    public function __construct(Route $route)
    {
        $this->route= $route;
    }
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
            'var_title' => 'required',
        ];
    }
}

