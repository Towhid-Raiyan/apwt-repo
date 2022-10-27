<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList(){
        $student = array();

        for($i=0; $i<5; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $students[] = (object)$student; 
        }


        return view('student.studentList')->with('students', $students);
    }

    public function login(){
        return view('login');
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required',
            'password' => 'required',
            
        ],
    );
        return $request->email;
    }

    public function studentEdit(Request $request){
        return $request->name;
    }
    public function studentRegistration(){
        return view('student.studentRegistration');
    }
    public function studentRegistrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'email',
            'password'=>'required|min:6|max:20',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }
}