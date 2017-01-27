
<?php



Class Giris extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('url');


}

public function index() {
}

public function girisyap() {
    $this->load->model('admin/Database_Model');
    $data = array(
       'mail' => $this->input->post('musteriGirisMail'),
       'parola' => $this->input->post('musteriGirisParola')
     );
     $result = $this->Database_Model->girisMusteri($data['mail'],$data['parola']);
    if ($result == TRUE) {       
        $result = $this->Database_Model->getByColumn("musteri","email",$data['mail']);
        $session_data = array(
            'mail' => $result[0]->email,
            'ad' => $result[0]->ad,
            'soyad' => $result[0]->soyad,
        );
        $this->session->set_userdata('logged_in', $session_data);
        redirect(base_url() . "normal/home/");
    } else {
        $data = array(
        'message' => 'Hatalı Giriş');
       redirect(base_url() . "normal/home");
   }
}


public function cikisyap() {
        
    $sess_array = array(
        'mail' => '',
        'adi' => '',
        'soyadiadi' => '',
    );
    $this->session->unset_userdata('logged_in', $sess_array);
 redirect(base_url() . "normal/home");
}

}

