<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }

        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('login_model');
    }

    function index()
    {
        $user = $this->login_model->get_user_by_id($this->session->userdata('id'));
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $this->load->view('profile_view', $data);
    }

    function change()
    {
        $id = $this->session->userdata('id');
        $pass = $this->input->post('current-password');
        $new = $this->input->post('new-password');
        $confirm = $this->input->post('password-confirmation');


        $result = $this->login_model->change_password($id, $pass, $new, $confirm);
        $this->session->set_flashdata('message', $result);
        redirect('profile');
    }
}
