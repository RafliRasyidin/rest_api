<?php

class Karyawan_Model extends CI_Model {

    public function getMahasiswa() {
        return $this->db->get('m_karyawan')->result_array();
    }
}