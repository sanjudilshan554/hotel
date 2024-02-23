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

    public function update(int $id, array $data){
        
        $hotel = $this->hotel->find($id);
      
        return $hotel->update($data);
    }


    public function delete(int $id){
        return $this->hotel->destroy($id);
    }
}