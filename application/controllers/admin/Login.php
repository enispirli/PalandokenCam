
<?php



Class Login extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('url');


}

public function index() {
$this->load->view('admin/giris');
}

public function girisyap() {
    $this->load->model('admin/database_model');
    $data = array(
       'kullaniciadi' => $this->input->post('kullaniciadi'),
       'parola' => $this->input->post('parola')
     );
     $result = $this->database_model->girisKullanici($data['kullaniciadi'],$data['parola']);
    if ($result == TRUE) {         
        
      
        $this->session->set_userdata('logged_in', $data['kullaniciadi']);
        redirect(base_url() . "admin/MusteriListele");
    } else {
        $data = array(
        'message' => 'Hatalı Giriş');
       redirect(base_url() . "admin/Login");
   }
}


public function cikisyap() {
        
    $sess_array = array(
        'kullaniciadi' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
 redirect(base_url() . "admin/Login");
}

}

