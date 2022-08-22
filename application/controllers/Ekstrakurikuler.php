<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ekstrakurikuler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ekstrakurikuler_model");
    }

    public function index()
    {
        $data["title"] = "Data Ekstrakurikuler";
        $data["data_ekstrakurikuler"] = $this->ekstrakurikuler_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('ekstrakurikuler/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
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
        $data["title"] = "Tambah Data ekstrakurikuler";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('ekstrakurikuler/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
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
        $data["title"] = "Edit Data ekstrakurikuler";
        $data["data_ekstrakurikuler"] = $ekstrakurikuler->getById($id);
        if (!$data["data_ekstrakurikuler"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('ekstrakurikuler/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->ekstrakurikuler_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data ekstrakurikuler berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}
