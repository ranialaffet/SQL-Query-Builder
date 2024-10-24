<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('id')) {
      redirect('request');
    }
    $this->load->library('form_validation');
    $this->load->library('encryption');
    $this->load->model('signup_model');
  }

  function index()
  {
    $this->load->view('signup_view');
  }

  function validation()
  {
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');


    if ($this->form_validation->run()) {
      $encrypted_password = $this->encryption->encrypt($this->input->post('password'));
      $data = array(
        'name'  => $this->input->post('name'),
        'email'  => $this->input->post('email'),
        'password' => $encrypted_password,
      );

      $id = $this->signup_model->insert($data);
      if ($id > 0) {
        $this->session->set_userdata('id', $id);
        redirect('request');
      } else {
        $this->session->set_flashdata('message', 'A problem occured, please try again');
      }
    }
    $this->index();
  }
}
