<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SorularListele extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['sorular'] = $this->Database_Model->getList("sorular");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sorular_listele', $param);
        $this->load->view('admin/footer');
    }
    //$id silinen kategorinin idsi
    public function sil($id) {
       $this->load->model('admin/Database_Model');
        $this->Database_Model->delete("sorular", $id);
        $this->session->set_flashdata("sonuc", "Sık sorulan sorular silme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/SorularListele");
    }

    public function duzenle($id) {
       $this->load->model('admin/Database_Model');
        $param['sorular'] = $this->Database_Model->get("sorular", $id)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/soru_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('sorularId'),
            'soru' => $this->input->post('soru'),
            'cevap' => $this->input->post('cevap')
        );
        $this->Database_Model->update("sorular", $data);
        $this->session->set_flashdata("sonuc", "Sık sorulan sorular düzenleme işlemi başarıyla tamamlandı");
        $this->session->set_flashdata("error", false);
        redirect(base_url() . "admin/SorularListele");
    }

}
