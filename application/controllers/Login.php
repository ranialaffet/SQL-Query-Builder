<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('request');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('signIn_view');
    }

    function validation()
    {
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $result = $this->login_model->can_login($this->input->post('email'), $this->input->post('password'));
            if ($result == '') {
                redirect('request');
            } else {
                $this->session->set_flashdata('message', $result);
                redirect('login');
            }
        }
    }
}
