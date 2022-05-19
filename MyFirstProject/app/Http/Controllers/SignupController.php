<?php

namespace App\Http\Controllers;
use App\models\signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
            'name' => 'required|max:100',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'

        ]);
        
        $email = signup::where('email', '=', $request->input('email'))->first();
        if($email === null)
        {
            $password = $request->password;
            $confirm = $request->password_confirmation;

            $user = signup::create(array(
            'name'=> $_REQUEST['name'], 
            'email'=> $_REQUEST['email'],
            'password' => encrypt($password),
            'password_confirmation' => encrypt($confirm)
            ));


            $request->session()->put([
                'id' => $user->id,
                'loggedIn'=>true,
                ]
            );                      

            return redirect('/home')->with('message', '* You are register successfully *');
        }
        else {
            return redirect()->back()->with('alert', ' * This account is already exist * ')->withInput();
        }
        


    }

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
    public function destroy($id)
    {
        //
    }
}
