<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator,Redirect,Response;
Use App\Login;
Use App\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use Carbon\Carbon;

use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\ResetPassword as ResetPasswordNotification;
class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
 
    public function register()
    {
        return view('register');
    }
     
    public function postLogin(Request $request)
    {   
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
       // $credentials = $request->only('email', 'password');
     
        $Login = Login::where( ['email' => $request->email, 'password' => md5($request->password)])->first();

			 
        if (Auth::guest() && (!empty($Login) &&  $Login->uid!=='')) {
			Session::put('uid',$Login->uid);
			//DB::enableQueryLog();
			  $Register = Register::where(['uid' => $Login->uid])->first();
			///  $query = DB::getQueryLog();
			//$query = end($query);
			//print_r($query);exit;

		Session::put('uname',$Register->name);
			  session()->flash('success', 'Successfully Login');
           return redirect('/home');

        }else{ 
            session()->flash('error', 'Invalid credentials');
            return redirect()->back();
        }
    }
 
    public function postRegister(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(Request $request)
    {

        $rules = [
			'surname' => 'required|string',
		//	'city_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255'
		];
		$validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{ 
                $register = new Register;
                $register->name = $data['surname'];
                $register->date_of_birth ='1991-09-18';
				$register->designation = $data['designation'];
                $register->contact_no = $data['mobile'];
                $register->email_id = $data['email'];
                $register->office = $data['officename'];
                $register->save();
                $id = $register->uid;
                if($id){
                    $login = new Login;
                    $login->uid = $id;
                    $login->email = $data['email'];
                    $login->password = md5($data['password']);
                    $login->save();
                    $id1 = $login->loginid;
                }
				return redirect('login')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
    public function validatePasswordRequest(Request $request){
            //You can add validation login here
        $user = DB::table('userschema.usermaster')->where('email_id', '=', $request->email)
        ->count();
       
        //Check if the user exists
        if ($user  < 1) {
        return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }

        //Create Password Reset Token
        DB::table('userschema.password_resets')->insert([
        'email_id' => $request->email,
        'token' => str_random(60),
        'created_at' => Carbon::now()
        ]);
        //Get the token just created above
        $tokenData = DB::table('userschema.password_resets')
        ->where('email_id', $request->email)->first();

        if ($this->sendResetEmail($request->email, $tokenData->token)) {
        return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
        } else {
        return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
        }
    } 
    public function forgotpassword(){
        return view('passwords/email');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
		private function sendResetEmail($email, $token)
	{ 
	//Retrieve the user from the database
	$user = DB::table('userschema.usermaster')->where('email_id', $email)->select('email_id', 'name')->first();
	
	//Generate, the password reset link. The token generated is embedded in the link
	 return (new MailMessage)
            ->subject('Your Reset Password Subject Here')
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', url('password/reset', $token))
            ->line('If you did not request a password reset, no further action is required.');
//print_r($link);exit;
		try {
		//Here send the link with CURL with an external email API 
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
}
?>