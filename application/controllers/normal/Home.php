<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sliderlar'] = $this->database_model->getList("slider");
        $param['urunler'] = $this->database_model->db->query("select u.id, u.ismi, r.yol from urun u, resim r where r.urun_id=u.id GROUP BY u.id LIMIT 8")->result();
        $this->load->view('normal/navbar');
        $this->load->view('normal/header');
        $this->load->view('normal/content', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
