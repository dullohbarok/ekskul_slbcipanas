<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ekstrakurikuler_model");
    }

public function index($id = null)
    {
        if (!isset($id)) redirect('ekstrakurikuler');

        $ekstrakurikuler = $this->ekstrakurikuler_model;
        $validation = $this->form_validation;
        $validation->set_rules($ekstrakurikuler->rules());

        if ($validation->run()) {
            $ekstrakurikuler->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data ekstrakurikuler berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("ekstrakurikuler");
        }
        $data["title"] = "Edit Data Ekstrakurikuler";
        $data["data_ekstrakurikuler"] = $ekstrakurikuler->getById($id);
        if (!$data["data_ekstrakurikuler"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('edit/index', $data);
        $this->load->view('templates/footer');
    }
}
