<?php
class Front_model extends CI_model{

public function display_record(){
    $query = $this->db->query('select * from master_table');
    return $query->result();

}

}

?>