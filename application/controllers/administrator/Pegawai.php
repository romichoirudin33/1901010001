<?php

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
    }

    public function index()
    {
        $data['data_pegawai'] = $this->m_pegawai->getAll();

        $data['judul'] = 'Data Pegawai';

        $this->load->view('administrator/template', $data);

        //var_dump($data);
        //echo 'echo dari Controller';
    }
}