<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index($nama = '')
        {

            $data["title"] = "About";
            $data["nama"] = $nama;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('about/index', $data);
            $this->load->view('templates/footer');
        }   
}
