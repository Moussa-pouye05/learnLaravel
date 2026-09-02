@extends('layouts.app')
@section('title','Liste des étudiant')

@section('content')
 @if (session('success'))
     <p>{{ session('success')}}</p>
 @endif
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>telephone</th>
                <th>Departement</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student['nom']}}</td>
                    <td>{{ $student['email']}}</td>
                    <td>{{ $student['telephone']}}</td>
                    <td>{{ $student->departement?->nom ?? 'Aucun departement'}} </td>
                    <td><a href="/student/{{$student->id}}">Voire</a>
                    <a href="/students/{{$student->id}}/edit">Modifier</a>
                    <form action="/students/{{ $student->id}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')"
                        >
                            Supprimer
                        </button>
                    </form>
                </td>
                </tr>
            @empty
        <p>Aucun etudiant</p>
            @endforelse
        </tbody>
       
    </table>
    
   

@endsection