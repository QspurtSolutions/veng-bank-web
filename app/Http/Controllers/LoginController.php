<?php
namespace App\Http\Controllers;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{
    
    public function loginform(){
        return view ('admin.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password,'usertype'=>'admin'])){
           
            return redirect('admin/blog/')->with('message', 'Updated successfully');
        }
        if(auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password,'usertype'=>'user'])){  
            die("if ggg");
            return view('admin.blog');   
        }
        else{  die("else");
            return back()->withErrors(['message'=>'Invalid Credential']);
        }
    }



    public function logout(Request $request){
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return redirect('/admin/login');
    } 




}
