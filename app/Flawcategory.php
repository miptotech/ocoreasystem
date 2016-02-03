<?php
/**
 * Created by PhpStorm.
 * User: Julio Yepez
 * Date: 1/30/2016
 * Time: 4:33 PM
 */

namespace ocorea;

use Illuminate\Database\Eloquent\Model;

class Flawcategory  extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flawcategories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['var_category'];

}