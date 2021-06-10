<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;


use Redirect;

class TransportationController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    
    public function index()
    {
        return view ('transportation.index')->with([
            'data' => Transportation::all()
        ]);
    }


    
    public function create()
    {
        return view ('transportation.create');
    }


   
    public function store()
    {
        Transportation::create($this->request->except('_token'));

       
        return Redirect::route('transportation')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


   
    public function edit($id){

        return view ('transportation.edit')->with([
            'data' => Transportation::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
       
        Transportation::where('id', '=', $id)->update($this->request->except('_token'));

       
        return Redirect::route('transportation')->with([
            'success' => "Record is successfully updated"
        ]);
    }


    
    public function delete($id){
       
        Transportation::destroy($id);

       
        return Redirect::route('transportation')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}