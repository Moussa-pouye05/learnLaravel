    @extends('layouts.app')
    @section('title','A propos')
    @section('content')
    <h2>À propos de moi</h2>
    <p>je suis etudiant en developpement web</p>
    <h2>je m'appelle {{ $nom }} j'ai {{$age}}</h2>
    @if ($age < 18)
        <p>je suis mineur</p>
    @else
    <p>Je suis majeur</p>
    @endif
    <p>je fais la formation {{ $formation }}, mon objectif est: {{ $objectif }}</p>
    <h3>Mes tech</h3>
    <ul>
        @forelse ($technologies as $technologie)
            <li>{{ $technologie}}</li>
        @empty
            <p>Aucun technologie</p>
        @endforelse
    </ul>

    @if ($connecte)
        <p>utilisateur connecter</p>
    @else
        <p>utilisateur déconnecter</p>
    @endif
   
    @endsection