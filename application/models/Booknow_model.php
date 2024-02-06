<?php
if (!defined('BASEPATH')) exit("No Direct Access Allowed");

class Booknow_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function insertValue($table_name, $set)
{
    $str = $this->db->insert_string($table_name, $set);
    $query = $this->db->query($str);

    if ($this->db->affected_rows() > 0) {
        log_message('debug', 'Insertion successful. SQL: ' . $this->db->last_query());
        return true;
    } else {
        log_message('error', 'Insertion failed. SQL: ' . $this->db->last_query() . ' | Error: ' . $this->db->error());
        return false;
    }
}
}
?>
