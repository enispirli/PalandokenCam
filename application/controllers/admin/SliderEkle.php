<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SliderEkle extends CI_Controller {

    function _construct() {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('admin/Database_Model');
        $this->load->view('admin/navbar');
        $this->load->view('admin/side_bar');
        $this->load->view('admin/slider_ekle');
        $this->load->view('admin/footer');
    }

    public function ekle() {

        $this->load->model('admin/Database_Model');

        //resmin config ayarları yapılıyor.
        $config['upload_path'] = './uploads/'; // resmin nere yükleneceği
        $config['allowed_types'] = 'jpg|png|jpeg'; // hangi dosya uzantıları kabul edilecek
        $config['max_size'] = '1500';

        //initialize upload class
        $this->load->library('upload', $config);


        for ($i = 0; $i < count($_FILES['usr_files']['name']); $i++) {
            $_FILES['userfile']['name'] = strtotime("now")."_" . $_FILES['usr_files']['name'][$i];
            $_FILES['userfile']['type'] = $_FILES['usr_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['usr_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES['usr_files']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['usr_files']['size'][$i];

            $isUploaded = $this->upload->do_upload();
            
            if ($isUploaded) {
             
                $data = array(
                    'sira' => $this->input->post('sliderSira'),
                    'url' => $this->input->post('sliderUrl'),
                    'resimi' =>$_FILES['userfile']['name']
                );
                $this->Database_Model->insert_data('slider', $data);
            } else {
                // hata aldı
                $this->session->set_flashdata("sonuc", $this->upload->display_errors());
                redirect(base_url() . "admin/SliderEkle");
                return;
            }
        }


        $this->session->set_flashdata("sonuc", "Slider ekleme işlemi başarıyla tamamlandı");
        redirect(base_url() . "admin/SliderEkle");
    }

}
