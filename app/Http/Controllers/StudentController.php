<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::get();
    
        return view('students.index',compact('students'));
    }
    public function create(){
        return view('students.create');

    }
    public function store(Request $request){
       
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $student = new Student();
        $student->name = $request->input('name');
        $student->department = $request->input('department');
        $student->age = $request->input('age');

        
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();    
        if (!is_dir(public_path('students'))) {
            mkdir(public_path('students'), 0755, true);
        }  
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $path = $request->image->storeAs('public/students', $imageName);
        $student->image = $imageName;
        $student->save();
        return redirect('/')->with('success', 'New Student Added Successfully.');

    }

    public function edit($id){

        $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));

    }
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'age' => 'required|integer|min:1',
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $student = Student::findOrFail($id);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $path = $request->image->storeAs('public/students', $imageName);

        if ($student->image) {
            Storage::delete('public/students/' . $student->image);
        }

        $student->image = $imageName;
    }

    $student->name = $request->name;
    $student->department = $request->department;
    $student->age = $request->age;

    $student->save();

    return redirect('/')->with('success', 'Student updated successfully!');
}

    public function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/')->with('success', 'Student Deleted successfully!');
    }
    public function show($id){
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }
}
