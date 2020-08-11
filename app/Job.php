<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'id','name','user_id','job_code','salary','unit','location',
    'address','working_date','working_hours','start_time','end_time',
    'short_requirement','location','address','working_hours',
	'overtime','number_of_candidate','description','benefit','note',
    'unit','contact_name','contact_phone','contact_fb','contact_email',
    'status','created_job_at','updated_job_at','public_start_at','public_end_at',
    'level_job','image',
    ];

    public function getSearchModel($condition){
        // dd($condition);
        $query = $this->select('jobs.id','jobs.name as name_job','area.name as name_area' ,'jobs.location','jobs.address','jobs.salary','jobs.unit','jobs.working_date','jobs.number_of_candidate','jobs.description','jobs.benefit','jobs.note','jobs.unit','jobs.contact_phone','jobs.contact_fb','jobs.contact_email', 'user_id')  
            ->join('area', 'jobs.location', '=', 'area.id');                     

        if(!empty($condition['keyword'])){
            $query-> where('jobs.name','like', '%'.$condition["keyword"].'%');
        }

        if(!empty($condition['city'])){
            $query-> where('jobs.location','=', $condition["city"]);
        } 

        if(!empty($condition['salary'])){
        	$query-> where('jobs.salary','like', '%'.$condition["salary"].'%');
        } 
        if(!empty($condition['working_date'])){
            $query->where('jobs.working_date','=', $condition["working_date"]);
        }   
        return $query;
    }

    public function postJobModel($condition){
        $query = $this ->insert(['name'=>$condition['name'], 'address'=>$condition['address'], 'salary'=>$condition['salary'], 'working_date'=>$condition['working_date'], 'description'=>$condition['description'], 'note'=>$condition['note'],'contact'=>$condition['contact'],'image'=>$condition['image']]);
        return $query;
    }

    public function viewJobModal($condition){
         $query = $this->find($condition);
         return  $query;      
    }
    public function updateJobModal($condition, $id){
        $query = $this->where('id', $id)
                        ->update(['name'=>$condition['name'], 'address'=>$condition['address'], 'salary'=>$condition['salary'], 'working_date'=>$condition['working_date'], 'number_of_candidate'=>$condition['number_of_candidate'] ,'description'=>$condition['description'], 'note'=>$condition['note'],'contact'=>$condition['contact'],'image'=>$condition['image']]);
        return  $query;      
    }
    public function deleteJobModal($id){
        dd($id);
        $query = $this->where('id','=' ,$id)
                        -> delete();
        return  $query;      
    }

    public function viewJobByUserIdModal($userId){
         $query = $this->where('user_id','=' ,$userId)->get();
         return  $query;   
    }

}
