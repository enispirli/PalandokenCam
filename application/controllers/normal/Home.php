<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');

        $this->load->view('normal/navbar', $this->getNavbarParam());
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/content', $this->getParam());
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function getParam() {
        $param['sliderlar'] = $this->Database_Model->getList("slider");
        $param['urunler'] = $this->Database_Model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id GROUP BY u.id")->result();
        return $param;
    }

    public function getNavbarParam() {
        $navbarParam['title'] = "Palandöken Cam Anasayfa";
        return $navbarParam;
    }

}
