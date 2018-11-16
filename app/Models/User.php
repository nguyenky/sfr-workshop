<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version November 16, 2018, 7:14 am UTC
 *
 * @property string email
 * @property string name
 * @property string password
 * @property integer role
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'name',
        'password',
        'role',
        'token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'name' => 'string',
        'password' => 'string',
        'role' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required',
        'name' => 'required',
        'password' => 'required',
        'role' => 'required'
    ];

    
}
