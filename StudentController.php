<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    //
    // public function index($id,$name){
    //    return view("home",compact('id','name')); 
    //    return "Hi to" . $name . "with id" . $id;
    // }
    public function index($name,$id){
        return "Hi to ".$name." with Id ".$id;
    }
    public function contactus(){
        return "about details contactus us text comes to controller";
    }
   
    
}
// <!-- <h1>I'am {{$name}} with id {{$id}}</h1> -->

