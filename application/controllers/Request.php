<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }

        $this->load->library('pagination');
        $this->load->model('request_model');
    }

    function index()
    {
        $tables = $this->request_model->get_tables();
        $data['tables'] = $tables;
        $this->load->view('request_view', $data);
    }


    function get_column_names()
    {
        //POST data
        $tables = $this->input->post('tables');


        // Get data 
        $columns = array();
        foreach ($tables as $table) {
            $parts = explode(' ', $table);
            $alias = $parts[2];

            $cols = $this->request_model->get_columns_by_table($parts[0]);
            foreach ($cols as $column) {
                $columns[] = $alias . '.' . $column;
            }
        }

        echo json_encode($columns);
    }


    function work()
    {
        $tables = $this->input->post('tables');
        $table = $this->input->post('table');
        $columns = $this->input->post('columns');
        $conditions = $this->input->post('conditions');
        $joins = $this->input->post('joins');
        $orderCol = $this->input->post('orderColumn');
        $orderType = $this->input->post('orderType');



        if (empty($columns)) {
            $columns = array();
            foreach ($tables as $table) {
                $parts = explode(' AS ', $table);
                $alias = $parts[1];

                $cols = $this->request_model->get_columns_by_table($parts[0]);
                foreach ($cols as $column) {
                    $columns[] = $alias . '.' . $column . " AS " . $alias . '_' . $column;
                }
            }
        }

        $chosen_cols = implode(', ', $columns);



        $req = "SELECT " . $chosen_cols . " FROM " . $table . " ";
        if (!empty($joins)) {
            $req .= implode(' ', $joins);
        }
        if (!empty($conditions)) {
            $req .= ' WHERE ';
            $req .= implode(' ', $conditions);
        }
        if (!empty($orderCol)) {
            $req .= ' ORDER BY ' . $orderCol . ' ' . $orderType;
        }
        $req .= ';';



        $res = $this->request_model->execute($req);

        echo json_encode($res);
    }

    function contact()
    {
        $this->load->view('contact_view');
    }

    function docs()
    {
        $this->load->view('docs_view');
    }

    function help()
    {
        $data['fragment'] = '#condition';
        $this->load->view('docs_view', $data);
    }

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }
}
