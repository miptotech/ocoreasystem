<?php
/**
 * Created by PhpStorm.
 * User: Julio Yepez
 * Date: 1/28/2016
 * Time: 12:20 PM
 */

namespace ocorea;

use Illuminate\Database\Eloquent\Model;


class St extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'St';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['int_flawcategoryid','int_clientid','int_userrid','int_useraid','created_at','updated_at','var_invoiceci', 'date_start', 'int_clientid','var_typequipment' ,'var_brand','var_mobile','int_flawcategoryid','var_status','var_name','clients.var_name'];



}