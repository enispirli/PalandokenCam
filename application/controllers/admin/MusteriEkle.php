<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MusteriEkle extends CI_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/database_model');
        $param['sirketler'] = $this->database_model->getList("sirket");
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/musteri_ekle', $param);
        $this->load->view('admin/footer');
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
            $this->session->set_flashdata("sonuc", "Müşteri ekleme işlemi başarıyla tamamlandı");
            redirect(base_url() . "admin/MusteriEkle");
        } else {
            $this->session->set_flashdata("error", true);
            $this->session->set_flashdata("sonuc", "Şifreler uyuşmuyor.");
            redirect(base_url() . "admin/MusteriEkle");
        }
    }

}
