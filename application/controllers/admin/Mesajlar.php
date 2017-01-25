<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['mesajlar'] = $this->database_model->getList("mesaj");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/mesajlar', $param);
        $this->load->view('admin/footer');
    }

    public function oku($id) {
        $this->load->model('admin/database_model');
        $param['mesaj'] = $this->database_model->get("mesaj", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/mesaj_detay', $param);
        $this->load->view('admin/footer');
    }

    public function okunduGuncelle() {
        $this->load->model('admin/database_model');
        $data = array(
            'id' => $this->input->post('id'),
        );
        $this->database_model->updateColumn("mesaj", $data['id'], "okundu", true);
        redirect(base_url() . "admin/Mesajlar");
    }

    public function sil($id) {
        $this->load->model('admin/database_model');
        $this->database_model->delete("mesaj", $id);
        redirect(base_url() . "admin/Mesajlar");
    }

}
