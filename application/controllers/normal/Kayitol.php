<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kayitol extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sirketler'] = $this->database_model->getList("sirket");
        $this->load->view('normal/navbar');
        $this->load->view('normal/header');
        $this->load->view('normal/kayitol',$param);
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

       public function ekle() {
        if ($this->input->post('musteriSifre') == $this->input->post('musteriSifre2')) {
            $this->load->model('admin/database_model');
            $data = array(
                'ad' => $this->input->post('musteriAdi'),
                'soyad' => $this->input->post('musteriSoyadi'),
                'email' => $this->input->post('musteriEmail'),
                'sifre' => $this->input->post('musteriSifre'),
                'tel' => $this->input->post('musteriTel'),
                'sirket_id' => $this->input->post('musteriSirket')
            );
            $this->database_model->insert_data('musteri', $data);
            $this->session->set_flashdata("sonuc", "Kayıt işlemi başarıyla tamamlandı");
            redirect(base_url() . "normal/kayitol");
        } else {
            $this->session->set_flashdata("error", true);
            $this->session->set_flashdata("sonuc", "Şifreler uyuşmuyor.");
            redirect(base_url() . "normal/kayitol");
        }
    }

}
