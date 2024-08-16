@extends('layout')

@section('content')
<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}">
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $contact->address }}">
    </div>
    <button type="submit">Update</button>
</form>
@endsection
