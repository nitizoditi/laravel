<?php
namespace sms\Http\Controllers;
use sms\User; 
use Mail;
use Session;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use sms\Http\Controllers\Controller;
use Twilio;
class UserController extends Controller { 
    public function index(){
        
        if(Auth::check()){
             return redirect()->route('dashboard'); 
        }else{
            return view('login');
        }   
    }
    public function postSignUp(Request $request) 
    {
        $this->validate($request,[
           'email'  => 'required|email|unique:users',
           'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|min:6',
            'mobile' => 'required',
            'username'  => 'required|unique:users',
        ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $phoneno = $request['mobile'];
        $username = $request['username'];
        $password = bcrypt($request['password']);
        $code = $this->random_password(5);
        $user = new User();
        $user->email = $email;
        $user->lname = $last_name;
        $user->fname = $first_name;
        $user->phoneno = $phoneno;
        $user->password = $password;
        $user->username = $username;
        $user->code = $code;
        if($user->save()){ 
            Session::put('user', $user);       
           Mail::send('templates.verify', ['id' => $user->id,'user' => $user,'name'=>$first_name,'code'=>$code],function ($message) use ($user){       
               $message->to($user->email,$user->fname)->subject($user->fname . ' lets get your SMS account setup');
               $message->from('noreply@oditiwebs.com','noreply');
            });
           $to = $user->phoneno;
           $body = 'Thanks for registeration. Here is your verification code : '. $user->code; 
           $response = Twilio::message($to,$body);

           $request->session()->flash('alert-success', 'Verification code sent via mail and sms.');
           return redirect()->route('verify');
        }     
        return redirect()->back();
    }
    public function postSignIn(Request $request)
    {
        $this->validate($request,[            
            'password' => 'required',           
            'username'  => 'required',
        ]);
         $username = $request->input('username');
          //dd($username);
         $password = $request->input('password');
          
        $attempt = Auth::attempt(['username' => $username, 'password' => $password,'activate'=>1,'status'=>1,'payment'=>1]);
        
        if($attempt == 'true')
        {
            $user_data = Auth::user();
            Session::put('id', $user_data->id);    
            Session::put('fname', $user_data->fname);
            Session::put('lname', $user_data->lname);
            Session::put('email', $user_data->email);
            Session::put('username', $user_data->username);
            return redirect()->route('dashboard'); 
        }else{
            return redirect()->back();
        }
         return redirect()->back();        
    }
    public function postForgot(Request $request){
         $this->validate($request,[
           'email'  => 'required|email'
        ]);
        $email = $request['email'];
        $user = User::where('email', $email)->first();
        if($user){
             $id=$user->id;             
             $password = $this->random_password(5);
             $user->password = bcrypt($password);
             $user->id = $id;
             if($user->save()){
                Mail::send('templates.forgot', ['user' => $user,'name'=>$user->fname,'password'=>$password,'username'=>$user->username],function ($message) use ($user){       
               $message->to($user->email,$user->fname)->subject($user->fname . ' Forgot Password Notification');
               $message->from('noreply@oditiwebs.com','noreply');
            });
                $request->session()->flash('alert-success', 'The mail has been sent to reset password.');
             }else{
                 $request->session()->flash('alert-danger', 'The email entered is not found.Please, try again.');
             }
        }
        return redirect()->back();
    }

    public function getDashboard(Request $request)
    {      
        
              return view('dashboard');
            
      
    }
    public function random_password($length = 5) 
    {
		
        $chars = "0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
    public function getVerify(Request $request)
    {           
        $user=Session::get('user');        
        $result = DB::table('users')->select('payment','activate')->where('id', $user->id)->first();    
        if($result->activate == 0){
            return view('verify');           
        }else{
          return redirect()->route('login');
        }

       
    }
    public function postVerify(Request $request){
         $this->validate($request,[
            'code' => 'required',
        ]);
         $code = $request['code'];
         $user=Session::get('user');        
       dd($user);
          if($user->activate == 0){
             if($user->code == $code){      
                 $id=$user->id;             
                 $user->id = $id;
                 $user->activate = 1;
                 $user->code = 'NULL';
                 if($user->save()){
                     Mail::send('templates.activate', ['user' => $user,'name'=>$user->fname,'username'=>$user->username,'password'=>$user->password],function ($message) use ($user){ 
                        $message->to($user->email,$user->fname)->subject($user->fname . ' Welcome to SMS ');;
                         $message->from('noreply@oditiwebs.com','noreply');

                     });
                     $request->session()->flash('alert-success', 'Thank you to complete the verification process.');
                     return redirect()->route('payment');
                     
                }else{
                    $request->session()->flash('alert-danger', 'Your account is not activate.Please, try again.');
                    return redirect()->route('verify');
                }
             }else{
                $request->session()->flash('alert-danger', 'Worng verification code. Please, try again.');
                return redirect()->route('verify');
             }                   
          }else{
            return redirect()->route('login');
          }
    }       

    public function getPayment(Request $request){
        $id=Session::get('id');
        $result = DB::table('users')->select('payment','activate','fname','lname')->where('id', $id)->first();
        if($result->payment==0){
            return view("payment")->with('result',$result);
            Auth::logout();
            Session::flush();
        }else{
            return redirect()->route('login');
        }
       
    }
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
    public function getProfile(){
        $id=Session::get('id');
        $result = DB::table('users')->where('id', $id)->first();         
        return view('profile')->with('result',$result);        
    }
    public function postProfile(){
        
    }
	
     
}


