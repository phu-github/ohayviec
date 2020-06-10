<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use Notifiable;
	  /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
 	protected $table ="users";
    protected $primaryKey = 'id'; 
    
    protected $fillable = [
        'email', 'password',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}