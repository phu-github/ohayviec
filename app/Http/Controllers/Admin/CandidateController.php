<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidate;

class CandidateController extends Controller
{
    public function view(Request $request){
    	$candidate   = new Candidate();
    	$candidateData = $candidate->getCandidateModal(null)->paginate(7); 
    	return view('admin.candidate',compact('candidateData'));
    }
    public function editCan(Request $request){
    	return view('');
    }
    public function deleteCan(Request $request){
		return view('');
    }
    public function addCan(Request $request){
            $candidates = new Candidate();
            // dd($request->all());
            if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName('avatar');
            $file ->move('avatar',$fileName);
            }else{
                
            }
            $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'old' => $request->input('old', ''),
                'gender' => $request->input('gender', ''),
                'free_time' => $request->input('free_time', ''),
                'experiences' => $request->input('experiences', ''),
                'contact' => $request->input('contact', ''),
                'picture' => isset($fileName)? $fileName : 'picdefaut.jpg',
            ];
            $candidates->addCanModel($inputs);
            return redirect()->route('quan-ly-tin')->with('success', "Thêm hồ sơ thành công");
    }


}
//END