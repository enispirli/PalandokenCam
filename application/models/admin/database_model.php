<?php

class database_model extends CI_Model {

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

    public function update($table, $data) {
        return $this->db->where('id', $data["id"])->update($table, $data);
    }
}

?>