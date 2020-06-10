<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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

    //insert dữ liệu khi đăng kí thành công
    public function storeModel($condition){ 

        $query = $this->insert(
            ['name' => $condition['name'], 'email' => $condition['email'] ,'password' => $condition['pass'], 'priority' =>$condition['priority'] ]
        );

        return $query;
    }
}
