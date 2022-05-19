<?php

namespace App\Http\Controllers;
use App\models\login;
use Auth;
use App\models\signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email_address' => 'required',
            'login_password' => 'required'
        ]);
        
        $email = $request->email_address;
        $password = $request->login_password;

        $login = signup::where(['email' => $email])->first();
        
        if ($login !== null && $password == decrypt($login->password)) 
        {

            if($email == 'admin@admin' && $password == 'admin1234')
            {
                $request->session()->put([
                    'id' => $login->id,
                    'loggedIn'=>true,
                    ]  
                );    // store id of user in the session

                return redirect('/admin');
            }
            else
            {
                $request->session()->put([
                    'id' => $login->id,
                    'loggedIn'=>true,
                    ]
                );     // store id of user in the session 
    
                return redirect('/home')->with('message', '* You are login successfully *');
            }

        }

           
        else 
        {
            return back()->with('alert', 'Email Or Password is Incorrect!')->withInput();
        }
        
    }
    /*
        if (Auth::attempt(array('email' => $request->email_address, 'password' => $request->login_password))){
            return redirect('/home');
        }else{
            return redirect()->back()->with('alert' , '* E-mail or Password is wrong *')->withInput();
        }
        */
        /*
        $email = $request->email_address;
        $password = $request->login_password;
        $passwordenc = encrypt($password);
        $login = signup::where(['email' => $email])->first();
        $pass = signup::where([$login->password  => $passwordenc])->first();
        
        if (!empty($login) && !empty($pass)) {

            //Store Session
            $request->session()->put(['id' => $login->id]);
            return Redirect('/home');
     } else {
            return back()->with('alert', 'Email Or Password Wrong!');
     }
        */
        //$pass = signup::check();
        //$pass = signup::where([ 'password' => $passwordenc])->first();

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(signup $id)
    {
        session()->invalidate();
        return redirect('/login');
    }
}
