<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


use Redirect;

class SupplierController extends Controller
{
   
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('supplier.index')->with([
            'data' => Supplier::all()
        ]);
    }


    
    public function create()
    {
        return view ('supplier.create');
    }


    public function store()
    {
        Supplier::create($this->request->except('_token'));

       
        return Redirect::route('supplier')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    
    public function edit($id){

        return view ('supplier.edit')->with([
            'data' => Supplier::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
       
        Supplier::where('id', '=', $id)->update($this->request->except('_token'));

        
        return Redirect::route('supplier')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     
    public function delete($id){
        
        Supplier::destroy($id);

        
        return Redirect::route('supplier')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}