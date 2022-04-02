

@extends('layouts.app')


@section('content')


<h1> Add a contact</h1>

<div>


<form action="{{ url('contacts') }}" method="POST" enctype="multipart/form-data">
    @csrf
       
        
        <div class="form-group">   
                <div class="row">
                    <div class="col-md-6">      
                        <label>Details</label>  
                        <label>Name (min 5)</label>  
                        <input type="text" name="name" class="form-control mylabels inputRequired" placeholder="Name" value="{{ old('name') }}">
                        <label>Contact (min 9)</label>  
                        <input type="text" name="contact_nr" class="form-control mylabels inputRequired" placeholder="Contact" value="{{ old('contact_nr') }}">
                        <label>Email)</label>  
                        <input type="text" name="email" class="form-control mylabels inputRequired" placeholder="Email" value="{{ old('email') }}">
                   
    
                    </div>
                   
                </div>
    
    
                
                <button type="submit" class="">Submit</button>
                
        </div>
    
</form>
        
    
       
    </div>


@endsection
