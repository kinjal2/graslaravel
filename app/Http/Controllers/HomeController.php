<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Session;
Use App\Register;
class HomeController extends Controller
{
    //
    public function index()
    {
       
	   return view('frontregistratin');
    }  
    public function updateprofiledetails(Request $request){
        $rules = [
			'name' => 'required|string',
			'office' => 'required|string',
           /* 'is_dept_head' => 'required',
            'is_dept_head' => 'required',
            'is_transferable' => 'required',
            'appointment_date' => 'required',
            'date_of_retirement' => 'required',
            'salary_slab' => 'required',
            'grade_pay' => 'required',
            'basic_pay' => 'required',
            'address'=>'required',
            'current_address'=>'required',
            'office_phone'=>'required',
            'office_address'=>'required',*/
            
            
            
            
		]; // print_r($request->all()); print_r($rules);exit;
		$validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return redirect('home')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{ 
                $uid=Session::get('uid');
                $register = Register::find($uid);
                
                $register = new Register;
                $register->name = $data['name'];
                $register->office = $data['office'];
              /*  $register->is_dept_head = $data['is_dept_head'];
                $register->date_of_birth ='1991-09-18';
				$register->designation = $data['designation'];
                $register->contact_no = $data['mobile'];
                $register->email_id = $data['email'];*/
               
                $register->save();
               
				return redirect('home')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
        }
     


    }
}
