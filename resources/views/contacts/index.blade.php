@extends('layout')

@section('content')
<h1>Contacts</h1>

<form method="GET" action="{{ route('contacts.index') }}">
    <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}">
    <button type="submit">Search</button>
</form>

<table>
    <thead>
        <tr>
            <th><a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
            <th>Email</th>
            <th><a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact) }}">View</a>
                    <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $contacts->appends(request()->input())->links() }}
@endsection
