<?php 

class car_model extends CI_Model {

    var $type   = '';
    var $min_price = '';
    var $max_price    = '';
    var $owner_name   = '';
    var $description = '';
    var $phone    = '';
    var $email   = '';
    var $created_by = '';
    var $created_at    = '';


    function __construct()
    {
        // Call the Model constructor
       parent::__construct();


    }
        
    public function insert($data){
        return $this->db->insert('car',$data);
    }

    public function findAllCars()
    {
        $query = $this->db->get('car');
        #print_r($query->result()) ;
        return $query->result();
    }

    public function delete($id){
        $this->db->where('car.car_id',$id);
        return $this->db->delete('car');
    }

    public function update($data, $id){
        $this->db->where('car.car_id',$id);
        return $this->db->update('car', $data);
    }

     public function findCar($id){
        $this->db->where('car.car_id',$id);
        return $this->db->get('car');
    }


}

?>
