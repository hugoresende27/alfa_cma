

@extends('layouts.app')


@section('content')


<h1> Contact Management Web application</h1>




<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        @auth
              
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>

        @endauth
      </tr>
    </thead>
    <tbody>

    @foreach ($contacts as $contact)        

      <tr>
        <td>{{ $contact->id }}</td>
        <td> <a href="/contacts/{{ $contact->id }}"> {{ $contact->name }} </a> </td>
        <td>{{ $contact->contact_nr }}</td>
        <td>{{ $contact->email }}</td>

        @auth
            
            
            <td><a href="/contacts/{{ $contact->id }}/edit">Edit </a></td>

            <td>
                    
                <form action="/contacts/{{ $contact->id  }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic text-black"
                            onclick="return confirm('Are you sure?')" 
                            > Delete </button>

                </form>

            </td>

        @endauth
      
      </tr>

    @endforeach
      
    </tbody>
  </table>

@endsection
