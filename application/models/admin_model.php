<?php

class Admin_model extends CI_Model
{
    // Menambahkan data ke dalam tabel
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function tambah_tugas($data)
    {
        // Set nilai default untuk status
        $data['status'] = 'belum selesai';
        $this->db->insert('task', $data);
    }

    public function get_all_tasks()
    {
        return $this->db->get('task')->result_array();
    }

    public function countTasksByStatus()
    {
        $tasks = $this->get_all_tasks();

        $jumlah_belum_selesai = 0;
        $jumlah_dikerjakan = 0;
        $jumlah_selesai = 0;

        foreach ($tasks as $task) {
            if ($task['status'] == 'belum selesai') {
                $jumlah_belum_selesai++;
            } elseif ($task['status'] == 'dikerjakan') {
                $jumlah_dikerjakan++;
            } elseif ($task['status'] == 'selesai') {
                $jumlah_selesai++;
            }
        }

        return [
            'jumlah_belum_selesai' => $jumlah_belum_selesai,
            'jumlah_dikerjakan' => $jumlah_dikerjakan,
            'jumlah_selesai' => $jumlah_selesai,
        ];
    }
}