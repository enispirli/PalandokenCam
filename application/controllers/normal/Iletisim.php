<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['iletisim'] = $this->database_model->getByColumn("ayarlar", "isim", "iletisim_icerik")[0];
        $param['adres'] = $this->database_model->getByColumn("ayarlar", "isim", "adres")[0];
        $param['mail'] =  $this->database_model->getByColumn("ayarlar", "isim", "mail")[0];
        $param['tel'] =  $this->database_model->getByColumn("ayarlar", "isim", "tel")[0];
        $this->load->view('normal/navbar');
        $this->load->view('normal/header');
        $this->load->view('normal/iletisim',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function kaydet() {
        $this->load->model('admin/database_model');
        $data = array(
            'ad' => $this->input->post('ad'),
            'soyad' => $this->input->post('soyad'),
            'email' => $this->input->post('email'),
            'konu' => $this->input->post('konu'),
            'icerik' => $this->input->post('icerik'),
            'okundu' => false
        ); 
        $this->database_model->insert_data('mesaj', $data);
        $this->session->set_flashdata("sonuc", "Mesajınız başarıyla alınmıştır. En kısa zamanda dönüş yapılacaktır.");
        redirect(base_url() . "normal/Iletisim");
    }

}
