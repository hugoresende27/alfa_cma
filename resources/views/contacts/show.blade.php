

@extends('layouts.app')


@section('content')




<div>

@foreach ($contact as $item)

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title">{{ $item->name }}</h2>
              
              <p class="card-text">ID: {{ $item->id }}</p>
              <p class="card-text">Contact: {{ $item->contact_nr }}</p>
              <p class="card-text">Email: {{ $item->email }}</p>
           
            </div>
        </div>
@endforeach

        
    
       
    </div>


@endsection
