<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;


use Redirect;

class DeliveryController extends Controller
{
    
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


   
    public function index()
    {
        return view ('deliveries.index')->with([
            'data' => Delivery::all()
        ]);
    }


    
    public function create()
    {
        return view ('deliveries.create');
    }


    
    public function store()
    {
        Delivery::create($this->request->except('_token'));

        
        return Redirect::route('deliveries')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    
    public function edit($id){

        return view ('deliveries.edit')->with([
            'data' => Delivery::where('id', '=', $id)->first()
        ]);
    }


    
    public function update($id){
        
        Delivery::where('id', '=', $id)->update($this->request->except('_token'));

        
        return Redirect::route('deliveries')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     
    public function delete($id){
        
        Delivery::destroy($id);

        
        return Redirect::route('deliveries')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}