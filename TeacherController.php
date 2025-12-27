<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Image;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
       $teachers =  Teacher::with('classes')->get();
       return $teachers;
    }
    public function show(){
      $teacher = Teacher::with('student','classes')->get();
      return $teacher;
    }
      public function showAddForm(){
       $users =  User::all();
       return view('Teacher.add',compact('users'));
    }
    public function create(Requst $request){
    $teacher = new Teacher();
    $teacher->validata([
      "name"=>"required|min:3|max:20",
      "phoneNumber"=>"required|min:10|max:10",
      "image"=>"required|nullable|image|mimes:png,jpg,jpeg"
    ]);
    $path = null;
    if($request->hasFile("image")){
      $path = $request->file("image")->store("images","public");
    }
    $teacher->name = $request->name;
    $teacher->phoneNumber = $request->phoneNumber;
    $teacher->user_id = $request->user_id;
    $teacher->save();

   $image = new Image();
   $image->path = $path;
   $image->imageable_id = $teacher->id;
   $image->imageable_type = Teacher::class;
   $image->save();
   return redirect("/");
    }
}