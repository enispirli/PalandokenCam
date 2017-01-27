<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ReferansListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['referanslar'] = $this->Database_Model->getList("referanslar");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/referans_listele', $param);
        $this->load->view('admin/footer');
    }
    //$id silinen kategorinin idsi
    public function sil($id) {
            $this->load->model('admin/Database_Model');
            $this->Database_Model->delete("referanslar", $id);
            $this->session->set_flashdata("sonuc", "Referans silme işlemi başarıyla tamamlandı");
            $this->session->set_flashdata("error", false);
            redirect(base_url() . "admin/ReferansListele");
        
    }

    public function duzenle($id) {
        $this->load->model('admin/Database_Model');
        $param['referans'] = $this->Database_Model->get("referanslar", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/referans_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
           'id' => $this->input->post('referansId'),
            'isim' => $this->input->post('referansIsim'),
            'icerik' => $this->input->post('referansIcerik'),
            'yol'=>$this->input->post('referansYol')
        );
        $this->Database_Model->update("referanslar", $data);
        $this->session->set_flashdata("sonuc", "Referans düzenleme işlemi başarıyla tamamlandı");
        $this->session->set_flashdata("error", false);
        redirect(base_url() . "admin/ReferansListele");
    }

}

