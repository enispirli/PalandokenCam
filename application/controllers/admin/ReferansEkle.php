<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReferansEkle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['referanslar'] = $this->database_model->getList("referanslar");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/referans_ekle', $param);
        $this->load->view('admin/footer');
    }

    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'id' => $this->input->post('referansId'),
            'isim' => $this->input->post('referansIsim'),
             'yol'=>$this->input->post('referansYol'),
            'icerik'=>$this->input->post('referansIcerik')
            
        );
        $this->database_model->insert_data("referanslar", $data);
        $this->session->set_flashdata("sonuc", "Referans ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/ReferansEkle");
    }

  

    

}
