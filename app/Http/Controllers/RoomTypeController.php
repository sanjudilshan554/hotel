<?php

namespace App\Http\Controllers;

use domain\Facades\RoomTypeFacade\RoomTypeFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomTypeController extends Controller
{
    public function index(){
        return Inertia::render("RoomTypes/index");
    }

    public function store(Request $request){
        return RoomTypeFacade::store($request->all());
    }

    public function all(){
        $response['room_types']=RoomTypeFacade::all();
        return $response;
    }

    public function delete($id){
        return RoomTypeFacade::delete($id); 
    }

    public function edit($id) {
        $response['room_type'] = RoomTypeFacade::get($id);
        return inertia::render('RoomTypes/edit',$response);
    }

    public function get($id) {
        $response['room_type'] = RoomTypeFacade::get($id);
        return $response;
    }

    public function update($id,Request $request) {
        $response= RoomTypeFacade::update($id, $request->all());
        return $response;
    }

    public function deleteSelectedItems(Request $request){

        return RoomTypeFacade::deleteSelected($request);
       
    }

    public function count(){
        return RoomTypeFacade::count();
    }
}
