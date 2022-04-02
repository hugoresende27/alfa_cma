

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
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($contacts as $contact)        

      <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->contact_nr }}</td>
        <td>{{ $contact->email }}</td>
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
      
      </tr>

    @endforeach
      
    </tbody>
  </table>

@endsection
