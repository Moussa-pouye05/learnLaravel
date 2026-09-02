@extends('layouts.app')
@section('title','Detail student')
@section('content')
<p>L'identifiant: {{ $student->id }}</p>
<p>Nom: {{$student->nom}}</p>
<p>Email: {{$student->email}}</p>
<p>Telephone: {{$student->telephone}}</p>
@endsection