<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SertifikaListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['sertifikalar'] = $this->Database_Model->getList("sertifika");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sertifika_listele', $param);
        $this->load->view('admin/footer');
    }
    //$id silinen kategorinin idsi
    public function sil($id) {
            $this->load->model('admin/Database_Model');
            $this->Database_Model->delete("sertifika", $id);
            $this->session->set_flashdata("sonuc", "Sertifika silme işlemi başarıyla tamamlandı");
            $this->session->set_flashdata("error", false);
            redirect(base_url() . "admin/SertifikaListele");
        
    }

    public function duzenle($id) {
        $this->load->model('admin/Database_Model');
        $param['sertifika'] = $this->Database_Model->get("sertifika", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sertifika_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
           'id' => $this->input->post('sertifikaId'),
            'isim' => $this->input->post('sertifikaIsim'),
            'icerik' => $this->input->post('sertifikaIcerik'),
            'dosya_ismi'=>$this->input->post('sertifikaDosya'),
            'yol'=>$this->input->post('sertifikaYol')
        );
        $this->Database_Model->update("sertifika", $data);
        $this->session->set_flashdata("sonuc", "Sertifika düzenleme işlemi başarıyla tamamlandı");
        $this->session->set_flashdata("error", false);
        redirect(base_url() . "admin/SertifikaListele");
    }

}

