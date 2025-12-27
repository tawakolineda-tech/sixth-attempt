<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    public function index(){
       $grade = Grade::where("score",">",20)->orWhere("score","<","80")->get();
        return $grade;
    }
    public function show(){
       $grades = Grade::max("subject_id",">",20)->get();
    }
}
