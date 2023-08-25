<?php
class Mdata_delivery extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('dataproduksi');
        return $query->result();
    }
}
?>