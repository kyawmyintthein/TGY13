<?php 

class ads_model extends CI_Model {

    var $company_name   = '';
    var $owner_name = '';
    var $phone    = '';
    var $email   = '';
    var $logo = '';
    var $created_by = '';
    var $created_at    = '';


    function __construct()
    {
        // Call the Model constructor
       parent::__construct();


    }
        
    public function insert($data){
        return $this->db->insert('ads',$data);
    }

    public function findAllads()
    {
        $query = $this->db->get('ads');
        #print_r($query->result()) ;
        return $query->result();
    }

    public function delete($id){
        $this->db->where('ads.ads_id',$id);
        return $this->db->delete('ads');
    }

    public function update($data, $id){
        $this->db->where('ads.ads_id',$id);
        return $this->db->update('ads', $data);
    }

     public function findads($id){
        $this->db->where('ads.ads_id',$id);
        return $this->db->get('ads');
    }


}

?>