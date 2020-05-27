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
    	'contact', 'status',
    ];

    public function getCandidateModal($condition){
    	$query = $this->select('id', 'name', 'old','gender', 'address','picture','free_time','experiences','contact');

    	if(!empty($condition['keywordCan'])){
            $query-> where('jobs.name','like', '%'.$condition[""].'%');
        }

        if(!empty($condition['cityCan'])){
            $query-> where('jobs.location','=', $condition["city"]);
        } 

        if(!empty($condition['oldCan'])){
        	$query-> where('jobs.salary','like', '%'.$condition["salary"].'%');
        } 
        if(!empty($condition['dateCan'])){
            $query->where('working_date','=', $condition["date"]);
        }   
        return $query;
    }
}
