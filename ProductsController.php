<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    //
    public function index(){
        return Products::all();
    }
    public function add(){
      $product =   new Products();
      $product->pro_name = "Pear";
      $product->pro_price = 250;
      $product->model = "Afghani";
      $product->save();
      return "pear Saved";
    }
    public function show($id){
      $single = $product =  new Products();
       $single = $product->findOrFail($id);
       return $single;
    }
    public function update($id){
      $sum =  $item =  new Products();
      $sum->findOrFail($id);
      $sum->pro_name = "Mango";
      $sum->pro_price = 130;
      $sum->update();
      return "Pear updated";
    }
    public function delete($id){
       $result = $item =  new Products();
       $result = $item->findOrFail($id);
       $result->delete();
       return "Item deleted";
    }
}
