<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class KalitemizDuzenle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $param['kalitemiz'] = $this->Database_Model->get("ayarlar", 6)[0];
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/kalitemiz_duzenle', $param);
        $this->load->view('admin/footer');
    }

    public function guncelle() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'id' => $this->input->post('kalitemizId'),
            'isim' => $this->input->post('kalitemizIsim'),
            'icerik' => $this->input->post('kalitemizIcerik'),
        );
        $this->Database_Model->update("ayarlar", $data);
        $this->session->set_flashdata("sonuc", "Kalite Politika güncelleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/KalitemizDuzenle");
    }

  

    

}
