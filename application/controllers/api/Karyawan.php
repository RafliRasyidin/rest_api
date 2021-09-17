<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Karyawan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('Karyawan_Model', 'karyawan');
        $this->load->database();
    }

    function index_get()
    {
        $karyawan = $this->karyawan->getMahasiswa();
        if ($karyawan) {
            $this->response([
                'EMP' => $karyawan
            ], REST_Controller::HTTP_OK);
        }
    }
}
