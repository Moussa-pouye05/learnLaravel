<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Departement;

class StudentController extends Controller
{
     public function index(){
        $students = Student::with('departement')->get();
        return view('student.index',compact('students'));
    }

    public function show($id){
        $student = Student::white('departement')->findOrFail($id);
        return view('student.show',compact('student'));
    }
    public function create(){
        $departements = Departement::all();
        return view('student.create', compact('departements'));
    }
    public function store(Request $request){

    $request->validate([
       'nom' => 'required|min:3|max:50',
       'email' => 'required|email',
       'telephone' => 'required|min:9|max:15',
       'departement_id' => 'required|exists:departements,id' 
    ]);
        Student::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'departement_id' => $request->input('departement_id')
        ]);

        return redirect('/students')->whit('success','Enregitrement effectué avec success');
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        $departements = Departement::all();
        return view('student.edit',compact('student', 'departements'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'nom' => 'required|min:3|max:30',
            'email' => 'required',
            'telephone' => 'required|min:9|max:15',
            'departement_id' => 'required|exists:departements,id'
        ]);
        $student = Student::findOrFail($id);
        $student->nom = $request->nom;
        $student->email = $request->email;
        $student->telephone = $request->telephone;
        $student->departement_id = $request->departement_id;

        $student->save();

        return redirect('/students');
    }

    public function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students');
    }

    public function students($id){
        $departements = Departement::findorFail($id);
        $students = $departements->students;

        return view('about',compact('students', 'departements'));
        
    }
}
