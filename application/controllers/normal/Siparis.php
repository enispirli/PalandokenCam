<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siparis extends Base_Controller {

    function _construct() {
        parent::_construct();

        $this->load->helper('url');
    }

    public function index() {
        
        $this->load->view('normal/navbar',$this->getNavbarParam());
        $this->load->view('normal/header', $this->headerParam);
        $this->load->view('normal/siparis');
        $this->load->view('normal/footer');
        $this->load->view('normal/fix');
    }

    public function kaydet() {
        $this->load->model('admin/Database_Model');
        $data = array(
            'ad' => $this->input->post('ad'),
            'soyad' => $this->input->post('soyad'),
            'email' => $this->input->post('email'),
            'sirket' => $this->input->post('sirket'),
            'siparis_icerik' => $this->input->post('siparis_icerik'),
        );
        $email = $this->input->post('email');

        if (empty($email)) {
            $this->session->set_flashdata("sonuc", "Email Bos Bırakılamaz");
            redirect(base_url() . "normal/Siparis");
            return;
        }



//        $this->Database_Model->insert_data('siparis', $data);
//        $datasiparis = $this->Database_Model->getByColumn('siparis', 'email', $data['email'])[0];
        //resmin config ayarları yapılıyor.
        $config['upload_path'] = './uploads/'; // resmin nere yükleneceği
        $config['allowed_types'] = 'jpg|png|jpeg'; // hangi dosya uzantıları kabul edilecek
        $config['max_size'] = '400';

//        initialize upload class
        $this->load->library('email');
        $this->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
        $this->load->library('upload', $config);
        $isim = ($this->input->post('ad') . $this->input->post('soyad'));
        $this->email->from("palandokencam@yandex.com", "Palandöken Cam"); //mail gönderen bilgileri
        $this->email->to("info@palandokencam.com"); //formdan gelen mail alıcı bilgileri
        $this->email->subject($data["sirket"] . '- ' . $data["ad"] . ' ' . $data["soyad"] . ' Sipariş Hakkında.'); //Formdan gelen mail konusu
        $this->email->message('<b>Şirket: </b>' . $data["sirket"] . ' <br /><br />'
                . '<b>Ad Soyad:</b> ' . $data["ad"] . '  ' . $data["soyad"] . ' <br /><br />'
                . '<b>Email:</b> ' . $data["email"] . '<br /><br />'
                . $data["siparis_icerik"]); //Formdan gelen mail içeriği

        for ($i = 0; $i < count($_FILES['usr_files']['name']); $i++) {

            $_FILES['userfile']['name'] = "1" . "_" . $_FILES['usr_files']['name'][$i];
            $_FILES['userfile']['type'] = $_FILES['usr_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['usr_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES['usr_files']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['usr_files']['size'][$i];

            $isUploaded = $this->upload->do_upload();

            if ($isUploaded) {
                //eğer resim upload klasörüne yüklenmisse resim tablosuna kayıt at
                $dataResim = array(
                    'yol' => $_FILES['userfile']['name'],
                    'siparis_id' => $datasiparis->id);
//                $this->Database_Model->insert_data('siparisresim', $dataResim);
                $this->email->attach("./uploads/" . $_FILES['userfile']['name']);
            } else {
                // hata aldı
                $this->session->set_flashdata("sonuc", $this->upload->display_errors());
                redirect(base_url() . "normal/Siparis");
                return;
            }
        }

        $send = $this->email->send();
        if ($send) {
            $this->session->set_flashdata("sonuc", "Siparişiniz başarıyla alınmıştır. En kısa zamanda dönüş yapılacaktır.");
            redirect(base_url() . "normal/Siparis");
            return;
        }

        $this->session->set_flashdata("sonuc", "dasdas" . $this->email->print_debugger());
        redirect(base_url() . "normal/Siparis");
    }

      public function getNavbarParam() {
        $navbarParam['title'] = "Sipariş";
        return $navbarParam;
    }

    public function getParam() {
        $param['iletisim'] = $this->Database_Model->getByColumn("ayarlar", "isim", "iletisim_icerik")[0];
        $param['adres'] = $this->Database_Model->getByColumn("ayarlar", "isim", "adres")[0];
        $param['mail'] = $this->Database_Model->getByColumn("ayarlar", "isim", "mail")[0];
        $param['tel'] = $this->Database_Model->getByColumn("ayarlar", "isim", "tel")[0];
        return $param;
    }
}
