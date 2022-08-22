<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ekstrakurikuler_model");
    }

    public function index()
    {
        $ekstrakurikuler = $this->ekstrakurikuler_model;
        $validation = $this->form_validation;
        $validation->set_rules($ekstrakurikuler->rules());
        if ($validation->run()) {
            $ekstrakurikuler->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data ekstrakurikuler berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("ekstrakurikuler");
        }
        $data["title"] = "Pendaftaran";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }
}
