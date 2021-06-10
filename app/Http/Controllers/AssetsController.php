<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;


use Redirect;

class AssetsController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('assets.index')->with([
            'data' => Asset::all()
        ]);
    }


    
    public function create()
    {
        return view ('assets.create');
    }


   
    public function store()
    {
        Asset::create($this->request->except('_token'));

        
        return Redirect::route('assets')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    public function edit($id){

        return view ('assets.edit')->with([
            'data' => Asset::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
       
        Asset::where('id', '=', $id)->update($this->request->except('_token'));

        
        return Redirect::route('assets')->with([
            'success' => "Record is successfully updated"
        ]);
    }


    public function delete($id){
       
        Asset::destroy($id);

       
        return Redirect::route('assets')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}