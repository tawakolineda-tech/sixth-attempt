<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
      public function show(){
      $classes = Classes::with('teacher')->get();
      return $classes;
    }
}
