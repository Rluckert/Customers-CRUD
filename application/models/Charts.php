<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Charts extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getDatos()
    {
        $query = "SELECT Gender, COUNT(*) total
        FROM Customer c   
        GROUP BY Gender;";
        $result = $this->db->query($query)->result_array();
        return $result;
        
    }

    function pieDatos(){
        $query = "SELECT Gender, TRUNCATE((COUNT(*)/t1.value *100), 1) total
        FROM Customer c, (SELECT COUNT(*) value from Customer c) as t1
        GROUP BY Gender";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
