<?php 

namespace domain\Services\HotelService;
use App\Models\Hotel;

class HotelService{

    protected $hotel;

    public function __construct(){
        $this->hotel = new Hotel();
    }

    public function store(array $data){
        return $this->hotel->create($data);
    }

    public function get(int $id){
        return $this->hotel->find($id);
    }
}