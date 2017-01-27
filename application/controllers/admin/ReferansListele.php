<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ReferansListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['referanslar'] = $this->database_model->getList("referanslar");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/referans_listele', $param);
        $this->load->view('admin/footer');
    }
    //$id silinen kategorinin idsi
    public function sil($id) {
            $this->load->model('admin/database_model');
            $this->database_model->delete("referanslar", $id);
            $this->session->set_flashdata("sonuc", "Referans silme işlemi başarıyla tamamlandı");
            $this->session->set_flashdata("error", false);
            redirect(base_url() . "admin/ReferansListele");
        
    }

    public function duzenle($id) {
        $this->load->model('admin/database_model');
        $param['referans'] = $this->database_model->get("referanslar", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/referans_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/database_model');
        $data = array(
           'id' => $this->input->post('referansId'),
            'isim' => $this->input->post('referansIsim'),
            'icerik' => $this->input->post('referansIcerik'),
            'yol'=>$this->input->post('referansYol')
        );
        $this->database_model->update("referanslar", $data);
        $this->session->set_flashdata("sonuc", "Referans düzenleme işlemi başarıyla tamamlandı");
        $this->session->set_flashdata("error", false);
        redirect(base_url() . "admin/ReferansListele");
    }

}

