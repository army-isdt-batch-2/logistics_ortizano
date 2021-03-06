<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;


use Redirect;

class DistributionController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('distribution.index')->with([
            'data' => Distribution::all()
        ]);
    }


    
    public function create()
    {
        return view ('distribution.create');
    }


    
    public function store()
    {
        Distribution::create($this->request->except('_token'));

       
        return Redirect::route('distribution')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    
    public function edit($id){

        return view ('distribution.edit')->with([
            'data' => Distribution::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
       
        Distribution::where('id', '=', $id)->update($this->request->except('_token'));

       
        return Redirect::route('distribution')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     
    public function delete($id){
       
        Distribution::destroy($id);

       
        return Redirect::route('distribution')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}