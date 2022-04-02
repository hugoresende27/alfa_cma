

@extends('layouts.app')


@section('content')




<div>


<form action="{{ url('contacts') }}" method="POST" enctype="multipart/form-data" class="myform">
    <h1> Add a contact</h1>
    @csrf
       
        
        <div class="form-group ">   
                <div class="row">
                    <div class="col-8 ">      
                        
                        <label>Name (min 5)</label>  
                        <input type="text" name="name" class="form-control  " placeholder="Name" value="{{ old('name') }}">
                        <label>Contact (min 9)</label>  
                        <input type="text" name="contact_nr" class="form-control  " placeholder="Contact" value="{{ old('contact_nr') }}">
                        <label>Email</label>  
                        <input type="text" name="email" class="form-control  " placeholder="Email" value="{{ old('email') }}">
                    </div>
                   
                </div>
    
    
                
                <button type="submit" class="btn btn-primary m-3">Submit</button>
                
        </div>
    
</form>
        
    
       
    </div>


@endsection
