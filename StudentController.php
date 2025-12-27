<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    // public function index(){
    //     $students =  Student::with('user')->get();
    //     return $students;
    // }
    // ------------------------------------------------
    // public function index(){
    //   $students =   Student::with('subject','teacher')->get();
    //   return $students;
    // }
    public function index(){
     $students = Student::where("user_id",">",50)->orWhere("classes_id","<",40)->orderBy("name","asc")->get();
     return $students;
    }

    // public function show(){
    //   $student =  Student::whereBetween("classes_id",20,40);
    //  return $student;
    // }

}
