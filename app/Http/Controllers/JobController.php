<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Area;
use App\Job;
use App\User;
use App\Candidate;

		

class JobController extends Controller
{
    public function getSearch(Request $request){
        $area = new Area();
		$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        ];
		$cities = $area->getCityNameModel();
        return view('home',compact('inputs','cities'));
    }



    public function searchJob(Request $request){
        $job = new Job();
        $inputs = [
            'keyword' => $request->keyword,
            'city' => $request->city,
            'salary' => $request->salary,
            'working_date' => $request->working_date,
        ];
        $viewMoreJob = $request->input('viewMoreJob', 0);
        $jobSearch = $job->getSearchModel($inputs)->offset($viewMoreJob*5)->limit(5)->get();
        return response()->json($jobSearch);
    }  

    public function getAmountJob(Request $request){
        $area = new Area();
        $job = new Job();
        $inputs = [
                'keyword' => $request->input('keyword', ''),
                'city' => $request->input('city', ''),
                'date' => $request->input('date', ''),
                'salary' => $request->input('salary', ''),
        ];
        $cities = $area->getCityNameModel();
        $amountJobs =$job->getSearchModel($inputs)->count();
        return response()->json($amountJobs);
    }

    public function postJob(Request $request){
        if($request->ajax()){
            $job = new Job();
            $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'salary' => $request->input('salary', ''),
                'working_date' => $request->input('working_date', ''),
                'description' => $request->input('description', ''),
                'note' => $request->input('note', ''),
                'contact' => $request->input('contact', ''),
            ];
            $job->postJobModel($inputs);

        }
    }

    public function showPersonalInfo(Request $request){
        $job = new Job();
        $user = new User();
        $can = new Candidate();
        $userId = $request->user_id;
        $perInfo = $user ->viewUserModal($userId);  // lấy thông tin có trong bảng user
        
        // dữ liệu cho job
        $perJob = $job-> viewJobByUserIdModal($userId);
        $countJob = $job-> viewJobByUserIdModal($userId)->count();
        $dataPerJob =['perJob' => $perJob,'perInfo' => $perInfo];
        
        // dữ liệu cho candidate
        $perCan = $can -> viewCanByUserIdModal($userId);
        $countCan = $can-> viewCanByUserIdModal($userId)->count();
        $dataPerCan =['perCan' => $perCan,'perInfo' => $perInfo];

       
        if($request->priority == 1){
            return redirect()->route('admin-page');
        }else if($request->priority == 2){
            return view('candidate.dashboard',$dataPerCan,compact('countCan'));
        }else if($request->priority == 3){
            return view('recruiter.dashboard',$dataPerJob,compact('countJob'));
        }
        
    }

// Khu vực test, có thể xóa
		
// end khu vuc test
   

}
