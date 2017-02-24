<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $param['hakkimizda'] = $this->Database_Model->get("ayarlar", 2)[0];
        $this->load->model('admin/Database_Model');
        $this->load->view('normal/navbar', $this->getNavbarParam());
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/leftbarKurumsal');
        $this->load->view('normal/hakkimizda', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }
    
     public function getNavbarParam() {
        $navbarParam['title'] = "Hakkımızda";
        return $navbarParam;
    }

}
