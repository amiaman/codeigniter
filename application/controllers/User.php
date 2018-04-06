<?php
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }
    public function index()
    {
        $this->load->view('user/login');
    }
    public function login()
    {
       $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        if ($user=='AMi' && $pass=='123') {
            $this->session->set_userdata(array('user'=>$user));
            redirect(base_url('user/view'), 'refresh');
        } else {
            $data['error'] = 'Your Account is Invalid';
            $this->load->view('login_view', $data);
        }
    }

    public function view()
    {
        $results = $this->user_model->get_last_ten_entries();
        echo '<pre>'; print_r($results);exit;
        $this->load->view('user/view');
    }
}