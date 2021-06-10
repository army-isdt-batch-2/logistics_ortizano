<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;


use Redirect;

class StorageController extends Controller
{
   
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('storage.index')->with([
            'data' => Storage::all()
        ]);
    }


    
    public function create()
    {
        return view ('storage.create');
    }


    
    public function store()
    {
        Storage::create($this->request->except('_token'));

        
        return Redirect::route('storage')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


   
    public function edit($id){

        return view ('storage.edit')->with([
            'data' => Storage::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
       
        Storage::where('id', '=', $id)->update($this->request->except('_token'));

       
        return Redirect::route('storage')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     
    public function delete($id){
        
        Storage::destroy($id);

       
        return Redirect::route('storage')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}