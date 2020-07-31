<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function view(Request $request){
    	$job = new Job();
    	$jobData = $job->getSearchModel(null)->paginate(7);
    	return view('admin.job',['jobData' => $jobData]);
    }

    public function editJob(Request $request){
        $job = new Job();
        $Id = $request->attrEditId;
        $jobDetail = $job->viewJobModal($Id);
    	return view('admin.modal.form_job', $jobDetail);
    }
    public function updateJob(Request $request){
        $job = new Job();
        $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'salary' => $request->input('salary', ''),
                'working_date' => $request->input('working_date', ''),
                'number_of_candidate' => $request->input('number_of_candidate', ''),
                'description' => $request->input('description', ''),
                'note' => $request->input('note', ''),
                'contact' => $request->input('contact', ''),
            ];
        $Id = $request->attrEditId;
        $jobDetail = $job->updateJobModal($inputs,$Id);
    }

    public function deleteJob(Request $request){
         $job = new Job();
         $Id = $request->deleteId;
         $deleteDetail = $job ->deleteJobModal($Id);
    }
    public function addJob(Request $request){
            $job = new Job();
            if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName('avatar');
            $file ->move('avatar',$fileName);
            }else{
                
            }
            $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'salary' => $request->input('salary', ''),
                'working_date' => $request->input('working_date', ''),
                'description' => $request->input('description', ''),
                'note' => $request->input('note', ''),
                'contact' => $request->input('contact', ''),
                'image' => isset($fileName)? $fileName : 'imgdefaut.jpg',
            ];
            $job->postJobModel($inputs);
            return redirect()->route('quan-ly-tin')->with('success', "Thêm việc làm thành công");
    }




}
//end
