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

    // I changed pleaeschange others
    public function all(){
        $response['hotel_types']=HotelTypeFacade::all();
        return $response;
    }

    public function delete($id){
        
        return HotelTypeFacade::delete($id);
    }

    public function edit(int $id)
    {
        $response['hotelType'] = HotelTypeFacade::get($id);

        return inertia::render('HotelTypes/edit',$response);
    }

    public function get($id){
        $response['hotelTypes'] = HotelTypeFacade::get($id);
        return $response;
        // return new DataResource($payload);
    }

    public function update($id, Request $request){
        return HotelTypeFacade::update($id, $request->all());
    }
}
