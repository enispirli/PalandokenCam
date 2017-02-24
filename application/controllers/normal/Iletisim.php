<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');

        $this->load->view('normal/navbar', $this->getNavbarParam());
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/iletisim', $this->getParam());
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function getNavbarParam() {
        $navbarParam['title'] = "İletişim";
        return $navbarParam;
    }

    public function getParam() {
        $param['iletisim'] = $this->Database_Model->getByColumn("ayarlar", "isim", "iletisim_icerik")[0];
        $param['adres'] = $this->Database_Model->getByColumn("ayarlar", "isim", "adres")[0];
        $param['mail'] = $this->Database_Model->getByColumn("ayarlar", "isim", "mail")[0];
        $param['tel'] = $this->Database_Model->getByColumn("ayarlar", "isim", "tel")[0];
        return $param;
    }

}
