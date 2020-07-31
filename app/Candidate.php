<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidates';
    protected $primaryKey = 'id'; 
    protected $fillable = [
    	'id','name','old','gender','address',
    	'picture','free_time','experiences',
    	'contact', 'status', 'user_id',
    ];

    public function getCandidateModal($condition){
    	$query = $this->select('id', 'name', 'old','gender', 'address','picture','free_time','experiences','contact', 'user_id');

    	if(!empty($condition['addressCan'])){
            $query-> where('candidates.address','like', '%'.$condition["addressCan"].'%');
        }

        if(!empty($condition['dateCan'])){
            $query-> where('candidates.free_time','=', $condition["dateCan"]);
        } 

        if(!empty($condition['oldCan'])){
        	$query-> where('candidates.old','like', '%'.$condition["oldCan"].'%');
        } 
        if(!empty($condition['genderCan'])){
            $query->where('candidates.gender','=', $condition["genderCan"]);
        }   
        return $query;
    }
    
    public function addCanModel($condition){
        $query = $this ->insert(['name'=>$condition['name'], 'address'=>$condition['address'], 'old'=>$condition['old'], 'gender'=>$condition['gender'], 'picture'=>$condition['picture'], 'free_time'=>$condition['free_time'], 'experiences'=>$condition['experiences'], 'contact'=>$condition['contact']]);
        return $query;
    }


}
