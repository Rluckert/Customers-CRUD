<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function createUser($data)
    {
        $this->db->insert('Customer', $data);
        return true;
    }

    function getUser($id)
    {
        $this->db->where('Id', $id);
        $query = $this->db->get('Customer');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function getUsers(){
        $query = $this->db->get('Customer');
        return $query;
    }

    function updateUser($id, $data)
    {
        $this->db->where('Id', $id);
        $query = $this->db->update('Customer', $data);
        return true;
    }
    

    function deleteUser($id)
    {
        $this->db->where('Id', $id);
        $this->db->delete('Customer');
        return true;
    }
    
}
