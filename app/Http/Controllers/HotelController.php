<?php

namespace App\Http\Controllers;

use domain\Facades\HotelFacade\HotelFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{
    public function index(){
        return Inertia::render("Hotel/index");
    }

    public function all(){
        $response['hotels']=HotelFacade::all();
        return $response;
    }

    public function edit(int $id){
        $response['hotels']=HotelFacade::get($id);
        return Inertia::render("Hotel/edit",$response);
    }

    public function store(Request $request){
        $response =HotelFacade::store($request->all());
        return $response;
    }

    public function get(int $id){
        $response['hotels']=HotelFacade::get($id);
        return $response;
    }
    public function basicUpdate(int $id, Request $request){
        
         return HotelFacade::update($id,$request->all());
    }

    public function basicDelete(int $id){
        return HotelFacade::delete($id);
    }
}
