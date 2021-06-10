<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;


use Redirect;

class ReturnController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('return.index')->with([
            'data' => Returns::all()
        ]);
    }


    
    public function create()
    {
        return view ('return.create');
    }


    
    public function store()
    {
        Returns::create($this->request->except('_token'));

       
        return Redirect::route('return')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    
    public function edit($id){

        return view ('return.edit')->with([
            'data' => Returns::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
        
        Returns::where('id', '=', $id)->update($this->request->except('_token'));

      
        return Redirect::route('return')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     
    public function delete($id){
       
        Returns::destroy($id);

       
        return Redirect::route('return')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}