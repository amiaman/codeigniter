<?php
/**
 * Created by PhpStorm.
 * User: aman.singh
 * Date: 4/5/2018
 * Time: 11:29 AM
 */

class User_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        $this->load->database();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('user', 10);
        return $query->result();
    }

    public function get_varify_login($username, $pass)
    {
        $this->db->select('name');
        $this->db->from('users');
        $this->db->where('username', $username);
        $row = $this->db->get()->row('password');
    }

//    public function insert_entry()
//    {
//        $this->title    = $_POST['title']; // please read the below note
//        $this->content  = $_POST['content'];
//        $this->date     = time();
//
//        $this->db->insert('entries', $this);
//    }
//
//    public function update_entry()
//    {
//        $this->title    = $_POST['title'];
//        $this->content  = $_POST['content'];
//        $this->date     = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
//    }

}