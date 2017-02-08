<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Urun extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    function _remap($param) { //parametre atandığında çalış
        $this->index($param);
    }

    public function index($id) {
        $this->load->model('admin/Database_Model');
        $param['kategoriler'] = $this->Database_Model->getList("kategori");
        $param['urun'] = $this->Database_Model->get("urun", $id)[0];
        $param['resimler'] = $this->Database_Model->getByColumn("resim", "urun_id", $id);
        $this->load->view('normal/navbar');
         $this->load->view('normal/header',$this->headerParam);
        $this->load->view('normal/leftbar', $param);
        $this->load->view('normal/urun', $param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

}
