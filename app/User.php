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
    public $timestamps = true;
    public $remember_token=false;
    protected $fillable = [
        'email', 'password', 'name', 'address', 'phone', 'gender','priority',
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
    public function getUser($condition){ 

        $query = $this->select('users.id', 'users.name','users.email','users.address','users.phone','users.gender','users.password','users.avatar','users.status','users.priority','users.id','users.created_at','users.updated_at');
        return $query;
    }
    //insert dữ liệu khi đăng kí thành công
    public function storeModel($condition){ 

        $query = $this->insert(
            ['name' => $condition['name'], 'email' => $condition['email'] ,'password' => $condition['pass'], 'priority' =>$condition['priority'] ]
        );

        return $query;
    }
    public function viewUserModal($condition){
         $query = $this->find($condition);
         return  $query;      
    }
    public function updateUserModal($condition, $id){
        $query = $this->where('id', $id)
                        ->update(['name'=>$condition['name'], 'address'=>$condition['address'], 'email'=>$condition['email'], 'phone'=>$condition['phone'], 'gender'=>$condition['gender'],'created_at'=>$condition['created_at'],'updated_at'=>$condition['updated_at'],'priority'=>$condition['priority']]);
        return  $query;      
    }
    public function postUserModel($condition){
        $query = $this ->insert(['name'=>$condition['name'], 'address'=>$condition['address'], 'email'=>$condition['email'], 'phone'=>$condition['phone'], 'gender'=>$condition['gender'],'priority'=>$condition['priority'],'avatar'=>$condition['avatar']]);
        return $query;
    }



}
