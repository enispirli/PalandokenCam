<?php

class Database_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_data($table, $data) {
        $this->db->insert($table, $data);
        return true;
    }

    public function getList($table) {
        return $this->db->get($table)->result();
    }

    public function delete($table, $id) {
        return $this->db
                        ->where('id', $id)
                        ->delete($table);
    }

    public function get($table, $id) {
        return $this->db
                        ->where('id', $id)
                        ->get($table)
                        ->result();
    }

    public function getByColumn($table, $column, $value) {
        return $this->db
                        ->where($column, $value)
                        ->get($table)
                        ->result();
    }

    public function getByRowCountAndDesc($table, $column, $value) {
        return $this->db
                        ->limit($value)
                        ->order_by($column, "desc")
                        ->order_by($column, "desc")
                        ->get($table)
                        ->result();
    }

    public function update($table, $data) {
        return $this->db->where('id', $data["id"])->update($table, $data);
    }

    public function updateColumn($table, $id, $column, $value) {
        return $this->db->where('id', $id)->update($table, array($column => $value));
    }

    public function girisKullanici($kullaniciadi,$parola) {
                   $query = $this->db
                    ->where("kullaniciadi",$kullaniciadi)
                    ->where("parola",$parola)
                    ->limit(1)
                    ->get("kullanici");
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
    }
         public function girisMusteri($mail,$parola) {
                   $query = $this->db
                    ->where("email",$mail)
                    ->where("sifre",$parola)
                    ->limit(1)
                    ->get("musteri");
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
    }

}

?>