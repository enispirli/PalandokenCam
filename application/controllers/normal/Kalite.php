<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalite extends Base_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
      
        $this->load->model('admin/Database_Model');
        $this->load->view('normal/navbar',$this->getNavbarParam());
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/leftbarKurumsal');
        $this->load->view('normal/kalite', $this->getParam());
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function getNavbarParam() {
          $navbarParam['title'] = "Kalite Politikamız";
        return $navbarParam;
    }

    public function getParam() {
        $param['kalitemiz'] = $this->Database_Model->get("ayarlar", 6)[0];

        return $param;
    }

}
