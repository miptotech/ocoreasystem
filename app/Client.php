<?php
/**
 * Created by PhpStorm.
 * User: Julio Yepez
 * Date: 1/27/2016
 * Time: 11:42 AM
 */

namespace ocorea;


use Illuminate\Database\Eloquent\Model;


class Client extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','var_name', 'var_address', 'var_telephone','var_email' ,'var_mobile'];


}