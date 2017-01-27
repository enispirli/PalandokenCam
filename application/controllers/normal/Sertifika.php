<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifika extends BaseController {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
         $param['sertifikalar'] = $this->Database_Model->getList("sertifika");
        $this->load->view('normal/navbar');
        $this->load->view('normal/header',$this->headerParam);
         $this->load->view('normal/leftbarKurumsal');
        $this->load->view('normal/sertifika',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    

}
