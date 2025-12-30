<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $allCustomers = Customer::all();
        return view("customers",["all"=>$allCustomers]);
    }
    public function add(){
     $item = new Customer();
     $item->name = "Nidia";
     $item->save();
     return "Data inserted";
    }
}
