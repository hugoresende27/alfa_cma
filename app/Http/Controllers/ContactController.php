<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;

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
    
    public function store(StoreContactRequest $request)
    {
 
        $fields = $request->validated();
          
        $contact = Contact::create([
            'name'=>$fields['name'],
            'contact_nr'=>$fields['contact_nr'],
            'email'=>$fields['email'],
           
        ]);

        return redirect ('/')->with('message', 'Contact Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $contact = Contact::where('id',$id)->get();
        return view ('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::where('id',$id)->get();
        return view ('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreContactRequest $request , $id)
    {    
       
        $fields = $request->validated();
          
        $contact = Contact::where('id',$id)->update([
            'name'=>$fields['name'],
            'contact_nr'=>$fields['contact_nr'],
            'email'=>$fields['email'],
           
        ]);

        return redirect ('/')->with('message', 'Record Updated');
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
