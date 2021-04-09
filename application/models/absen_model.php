<?php

class Absen_model extends CI_Model
{
    private $table = 'absen_siswa';

    function __construct()
    {
        if (!$this->db->table_exists($this->table)) {
            $this->create_table();
        }
    }

    
    public function create($siswa_id,$materi_id) 
    {
        $this->db->insert($this->table, array(
            'siswa_id'    => $siswa_id,
            'materi_id'   => $materi_id,
            'absen'      => 1,
            'waktu' => date('Y-m-d H:i:s')
        ));

        return $this->db->insert_id();
    }


    public function retrieve($materi_id)
    {
      
         $this->db->select('absen_siswa.*, siswa.nama as siswa_nama, kelas.nama as kelas_nama');
         $this->db->from('absen_siswa');
         $this->db->join('siswa','siswa.id=absen_siswa.siswa_id');
         $this->db->join('kelas_siswa','kelas_siswa.siswa_id=siswa.id');
         $this->db->join('kelas','kelas.id=kelas_siswa.kelas_id');
         $this->db->where('kelas_siswa.aktif', 1);
         $this->db->where('materi_id', $materi_id);
         $query = $this->db->get();
         return $query->result();

        
    }

    public function getdata($materi_id, $siswa_idabsen)
    {
       
         $this->db->select('absen_siswa.*, siswa.nama as siswa_nama, kelas.nama as kelas_nama');
         $this->db->from('absen_siswa');
         $this->db->join('siswa','siswa.id=absen_siswa.siswa_id');
         $this->db->join('kelas_siswa','kelas_siswa.siswa_id=siswa.id');
         $this->db->join('kelas','kelas.id=kelas_siswa.kelas_id');
         $this->db->where('kelas_siswa.aktif', 1);
         $this->db->where('absen_siswa.siswa_id', $siswa_idabsen);
         $this->db->where('materi_id', $materi_id);
         $query = $this->db->get();
         return $query->row_array();        
    }

     public function getdatabysis($siswa_idabsen)
    {
       
         $this->db->select('absen_siswa.*, siswa.nama as siswa_nama, kelas.nama as kelas_nama');
         $this->db->from('absen_siswa');
         $this->db->join('siswa','siswa.id=absen_siswa.siswa_id');
         $this->db->join('kelas_siswa','kelas_siswa.siswa_id=siswa.id');
         $this->db->join('kelas','kelas.id=kelas_siswa.kelas_id');
         $this->db->where('kelas_siswa.aktif', 1);
         $this->db->where('absen_siswa.siswa_id', $siswa_idabsen);
         $query = $this->db->get();
         return $query->result();
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function input_data ($data, $table) 
    {
    $this->db->insert($table, $data);   
    }

   
}
