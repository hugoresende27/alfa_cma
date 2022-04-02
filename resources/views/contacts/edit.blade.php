

@extends('layouts.app')


@section('content')




<div>
@foreach ($contact as $item)
    


<form action="{{ url('contacts').'/'.$item->id }}" method="POST" enctype="multipart/form-data" class="myform">
    <h1> Edit a contact</h1>
    @csrf
    @method('PUT')
       
        
        <div class="form-group">   
                <div class="row">
                    <div class="col-md-6">      
                        <label>Details</label>  
                        <label>Name (min 5)</label>  
                        <input type="text" name="name" class="form-control  " placeholder="Name" value="{{ $item->name }}">
                        <label>Contact (min 9)</label>  
                        <input type="text" name="contact_nr" class="form-control  " placeholder="Contact" value="{{ $item->contact_nr }}">
                        <label>Email)</label>  
                        <input type="text" name="email" class="form-control  " placeholder="Email" value="{{ $item->email }}">
                   
                    </div>
                   
                </div>
    
    
                
                <button type="submit" class="btn btn-primary m-3">Submit</button>
                
        </div>
    
</form>
        
@endforeach 
       
</div>


@endsection
