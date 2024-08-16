@extends('layout')

@section('content')
<h1>Contact Details</h1>

<div>
    <strong>Name:</strong> {{ $contact->name }}
</div>
<div>
    <strong>Email:</strong> {{ $contact->email }}
</div>
<div>
    <strong>Phone:</strong> {{ $contact->phone }}
</div>
<div>
    <strong>Address:</strong> {{ $contact->address }}
</div>

<a href="{{ route('contacts.index') }}">Back to Contacts</a>
@endsection
