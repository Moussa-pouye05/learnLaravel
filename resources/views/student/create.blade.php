@extends('layouts.app')
@section('title','Ajout etudiant')
@section('content')
<form action="/student/store" method="POST">
    @csrf
   
    <div>
        <label for="">Nom</label>
        <input type="text" name="nom" value="{{ old('nom')}}">
        <div>
            @error('nom')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" value="{{ old('email')}}">
        <div>
            @error('nom')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div>
        <label for="">Telephone</label>
        <input type="text" name="telephone" value="{{ old('telephone')}}">
        <div>
            @error('nom')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </div>
    <select name="departement_id" id="departement_id">
        <option value="">
            choississez une option
        </option>
        @foreach ($departements as $departement)
            <option value="{{ $departement->id}}" {{ old('departement_id') == $departement->id ? 'selected' : '' }}>
                {{ $departement->nom}}
            </option>
        @endforeach
    </select>
    @error('departement_id')
        <p>{{ $message }}</p>
    @enderror
    <button type="submit">Enregistrer</button>
</form>
@endsection