<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function check_login($username, $password) {
        // Lakukan validasi login di sini, misalnya dengan database
        // Implementasi sesuai dengan kebutuhan Anda
        // Contoh sederhana: cek di database apakah username dan password cocok
        $query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
        return $query->num_rows() > 0;
    }
}
?>
