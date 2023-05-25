<?php 
class Main_model extends CI_Model{

    
    public function fetch_items($searchTerm){

        return $this->db->like('item_name', $searchTerm)->get('item')->result();

    }

    // end of model

}
?>