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

class EditStRequest extends Request
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
            'int_clientid' => 'not_in:0',
            'int_userrid' => 'not_in:0',
            'int_useraid' => 'not_in:0',
            'int_flawcategoryid' => 'not_in:0',
        ];
    }
}

