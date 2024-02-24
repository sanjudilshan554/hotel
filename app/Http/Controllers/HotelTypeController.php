<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\HotelType;
use domain\Facades\HotelTypeFacade\HotelTypeFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelTypeController extends Controller
{
    public function index(){
        return Inertia::render("HotelTypes/index");
    }

    public function store(Request $request){
        return HotelTypeFacade::store($request->all());
    }

    public function all(){
        $response['hotel_types']=HotelTypeFacade::all();
        return $response;
    }

    public function delete($id){
        return HotelTypeFacade::delete($id);
    }

    public function edit(int $id)
    {
        //this name should be same as props name
        $response['hotel_type'] = HotelTypeFacade::get($id); 
        return inertia::render('HotelTypes/edit',$response);
    }
 
    public function get($id){
        $response['hotel_type'] = HotelTypeFacade::get($id);
        return $response;
    }

    public function find($type){
        $response['hotel_type']=HotelTypeFacade::find($type);
        return $response;
    }

    public function update($id, Request $request){
        return HotelTypeFacade::update($id, $request->all());
    }

    public function deleteSelectedItems(Request $request){
        return HotelTypeFacade::deleteSelected($request);
       
    }
}
