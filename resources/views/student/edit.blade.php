@extends('layouts.app')
@section('title','Modifier un étudiant')
@section('content')
    
    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
        <div>
        <label for="">Nom</label>
        <input type="text" name="nom" value="{{ old('nom',$student->nom)}}">
        <div>
            @error('nom')
            <p>{{ $message }}</p>
            @enderror
        </div>
        
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email',$student->email)}}">
        <div>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone" value="{{ old('telephone', $student->telephone)}}">
        <div>
            @error('telephone')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </div>
    <select name="departement_id" id="departement_id">
        <option value="">
            choississez une option
        </option>
        @foreach ($departements as $departement)
            <option value="{{ $departement->id}}" {{ old('departement_id', $student->departement_id) == $departement->id ? 'selected' : '' }}>
                {{ $departement->nom}}
            </option>
        @endforeach
    </select>
    <button type="submit">Modifier</button>
    </form>

@endsection