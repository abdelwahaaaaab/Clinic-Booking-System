<?php

namespace App\Http\Controllers;
use App\models\book;
use App\models\signup;
use session;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book');
        
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
    public function store(Request $request, signup $user )
    {
        
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'date' =>'required',
            'time' =>'required',
            'phone' =>'required'
        ]
        );
        $time = book::where('time', '=', $request->input('time'))->first();
        $date = book::where('date', '=', $request->input('date'))->first();
        if ($time === null || $date === null) {
            $idi = 1;
            $book = book::create(array(
                'user_id'=> session('id'), 
                'name' => $_REQUEST['name'],
                'email'=> $_REQUEST['email'],
                'date' =>  $_REQUEST['date'],
                'time' => $_REQUEST['time'],
                'phone' => $_REQUEST['phone'],
                'message' => $_REQUEST['message']
                ));

            return redirect()->back()->with('message', ' * The appointment is added successfully * ');
        }
       else {
            return redirect()->back()->with('message', ' * This appointment is already exist * ');
        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book )
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'date' =>'required',
            'time' =>'required',
            'phone' =>'required'
        ]
        );

        $book->update($request->all());

        return redirect('/thanks')->with('message', ' * Your data is updated successfully * ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->back()->with('message', ' * The appointment is deleted successfully *');
    }
}
