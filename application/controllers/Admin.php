<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('admin_helper');
        $this->load->library('form_validation');
        if (
            $this->session->userdata('logged_in') != true ||
            $this->session->userdata('role') != 'admin'
        ) {
            redirect(base_url() . 'auth');
        }
    }

    // 1. Page
    // Page Dashboard
    public function index()
    {
        $data['tasks'] = $this->admin_model->get_all_tasks();
        $data['jumlah_task'] = count($data['tasks']);
        $status_counts = $this->admin_model->countTasksByStatus();
        $data['jumlah_belum_selesai'] = $status_counts['jumlah_belum_selesai'];
        $data['jumlah_dikerjakan'] = $status_counts['jumlah_dikerjakan'];
        $data['jumlah_selesai'] = $status_counts['jumlah_selesai'];
        $this->load->view('page/admin/dashboard', $data);
    }

    // Tambah Tugas
    public function tambah_tugas()
    {
        $this->load->view('page/admin/tambah_tugas');
    }

    // Page Tugas
    public function tugas()
    {
        $data['tasks'] = $this->admin_model->get_all_tasks();
        $data['jumlah_task'] = count($data['tasks']);
        $status_counts = $this->admin_model->countTasksByStatus();
        $data['jumlah_belum_selesai'] = $status_counts['jumlah_belum_selesai'];
        $data['jumlah_dikerjakan'] = $status_counts['jumlah_dikerjakan'];
        $data['jumlah_selesai'] = $status_counts['jumlah_selesai'];
        $this->load->view('page/admin/tugas', $data);
    }

    // Aksi Tambah Tugas
    public function aksi_tambah_tugas()
    {
        // Validasi form
        $this->form_validation->set_rules('nama_task', 'Nama Task', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required');

        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, tampilkan kembali halaman tambah tugas
            $this->load->view('admin/tambah_tugas');
        } else {
            // Jika validasi sukses, tambahkan data ke database
            $data = [
                'nama_task' => $this->input->post('nama_task'),
                'deskripsi' => $this->input->post('deskripsi'),
                'deadline' => $this->input->post('deadline'),
                'tanggal_tugas' => date('Y-m-d H:i:s'),
            ];

            $this->admin_model->tambah_tugas($data);

            redirect('admin');
        }
    }
}
