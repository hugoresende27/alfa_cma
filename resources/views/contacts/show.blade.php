

@extends('layouts.app')


@section('content')


<h1> Show contact</h1>

<div>

@foreach ($contact as $item)
        <h1></h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
            
              <p class="card-text">ID: {{ $item->id }}</p>
              <p class="card-text">Contact: {{ $item->contact_nr }}</p>
              <p class="card-text">Email: {{ $item->email }}</p>
           
            </div>
        </div>
@endforeach

        
    
       
    </div>


@endsection
