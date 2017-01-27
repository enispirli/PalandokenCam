<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Referans extends BaseController {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    function _remap($param) { //parametre atandığında çalış
        $this->index($param);
    }

    public function index($id) {
        $this->load->model('admin/database_model');
        $param['referans'] = $this->database_model->get("referanslar", $id)[0];
       
        $this->load->view('normal/navbar');
         $this->load->view('normal/header',$this->headerParam);
        $this->load->view('normal/leftbarReferans',$this->headerParam);
        $this->load->view('normal/referans', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
