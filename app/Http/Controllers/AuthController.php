<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Redirect, Storage, Auth;

class AuthController extends Controller
{
  
  protected $request;

  public function __construct(Request $request)
  {
      $this->request = $request;
  }

    public function index ()
    {
        return view('index');
    }
    public function login ()
    {
        return view('login');
    }
    public function registration ()
    {
        return view('registration');
    }
    public function login_verify ()
    {
        $login= Auth::attempt($this->request->except('_token'));

        if($login){
           
          return Redirect::route('supplier');
        }
       return redirect::route('app.login')
                    ->withError('Invalid User Credentials');
    }
    public function registration_verify ()
    {
       

        $this->request->merge([
           
            'password' =>bcrypt($this->request->password)
        ]);
      
        User::create(
            $this->request->except('file','token')
        );
       
        return Redirect::route('app.login');
      
    }
    public function logout ()
    {
        Auth::logout();
        return Redirect::route('app.login');
  
    

    }
}