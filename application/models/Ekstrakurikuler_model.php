<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ekstrakurikuler_model extends CI_Model
{
    private $table = 'ekstrakurikuler';
  
    public function rules()
    {
        return [
            [
                'field' => 'JenisEkstrakurikuler',  
                'label' => 'Jenis ekstrakurikuler',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'JenisKelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Kelas',
                'label' => 'Kelas',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'SatuanPendidikan',
                'label' => 'SatuanPendidikan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'NoHp',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["Id" => $id])->row();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("Id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "JenisEkstrakurikuler" => $this->input->post('JenisEkstrakurikuler'),
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Kelas" => $this->input->post('Kelas'),
            "SatuanPendidikan" => $this->input->post('SatuanPendidikan'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = array(
            "JenisEkstrakurikuler" => $this->input->post('JenisEkstrakurikuler'),
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Kelas" => $this->input->post('Kelas'),
            "SatuanPendidikan" => $this->input->post('SatuanPendidikan'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->update($this->table, $data, array('Id' => $this->input->post('Id')));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("Id" => $id));
    }
}