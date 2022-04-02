<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index');
       
    }


    public function index()
    {

        $contacts = Contact::all();
        return view ('welcome', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            
            'name'=>'required|string|min:5',
            'contact_nr'=>'required|integer|min:9',
            'email'=>'required|string|email',
                            
        ],
        [
            'name'=>'5 chars minimum',
            'contact_nr'=>'9 digits minimum',
            'email'=>'Invalid Email',
        ]);

          
        $contact = Contact::create([
            'name'=>$fields['name'],
            'contact_nr'=>$fields['contact_nr'],
            'email'=>$fields['email'],
           
        ]);

        return redirect ('/');
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
        $contact = Contact::where('id', $id);
      
        $contact->delete();
       
        return redirect('/')->with ('message', 'Contact deleted!');
    }
}
