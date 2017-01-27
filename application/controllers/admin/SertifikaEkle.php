<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SertifikaEkle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sertifika'] = $this->database_model->getList("sertifika");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/sertifika_ekle', $param);
        $this->load->view('admin/footer');
    }

    public function ekle() {
        $this->load->model('admin/database_model');
        $data = array(
            'id' => $this->input->post('sertifikaId'),
            'isim' => $this->input->post('sertifikaIsim'),
            'icerik' => $this->input->post('sertifikaIcerik'),
            'dosya_ismi'=>$this->input->post('sertifikaDosya'),
            'yol'=>$this->input->post('sertifikaYol')
            
        );
        $this->database_model->insert_data("sertifika", $data);
        $this->session->set_flashdata("sonuc", "Sertifika ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/SertifikaEkle");
    }

  

    

}
