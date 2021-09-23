<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Kelompok extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        must_login();
    }


    function index(){

      if (is_siswa()) {
        $where = array('siswa_id' => get_sess_data('user', 'id'));
      }

      if (is_pengajar() or is_admin()) {
        $where = array('pengajar_id' => get_sess_data('user', 'id'));
      }

        $data['kelompok']  = $this->db->select('kelas.nama as nama_kelas, pengajar.nama as nama_pengajar, kelompok_siswa.siswa_id as siswa_id, kelompok.*')->where($where)->join('kelas', 'kelompok.kelas_id=kelas.id', 'left')->join('kelompok_siswa', 'kelompok_siswa.kelompok_id = kelompok.kelompok_id', 'left')->join('siswa', 'siswa.id=kelompok_siswa.siswa_id', 'left')->join('pengajar', 'pengajar.id=kelompok.pengajar_id')->get('kelompok')->result();

                                          // echo '<pre>'; print_r($data); echo '</pre>';die;
        
        $data['data_terakhir'] = $this->db->select_max('id')->get('diskusi')->row()->id;
        $data['kelas']   = $this->kelas_model->retrieve_all_child();
        $this->twig->display('list-kelompok.html', $data);
    }

    function detail($segment_4 = ''){
      $kelompok_id = (int)$segment_4;
      $data['kelompok_id'] = $kelompok_id;
      $data['nama_kelompok'] = $this->db->get_where('kelompok', array('kelompok_id'=> $kelompok_id))->row()->kelompok_nama;
      $data['kelas_id'] = $this->db->where('kelompok_id', $kelompok_id)->get('kelompok')->row()->kelas_id;
      $kelas_id = $this->db->where('kelompok_id', $kelompok_id)->get('kelompok')->row()->kelas_id;
     
      $data['siswa']  = $this->db->select('kelas.nama as nama_kelas, siswa.nama as nama_siswa, siswa.id as siswa_id')
                                  ->where('kelompok_id', $kelompok_id)
                                  ->join('siswa', 'kelompok_siswa.siswa_id=siswa.id')
                                  ->join('kelas_siswa', 'kelas_siswa.siswa_id=siswa.id')
                                  ->join('kelas', 'kelas.id=kelas_siswa.kelas_id')
                                  ->get('kelompok_siswa')
                                  ->result();
      $data['siswas'] = $this->db->select('siswa.nama as nama_siswa, kelas.nama as nama_kelas, siswa.id as siswa_id, kelas_siswa.kelas_id as kelas_id')
      ->where('kelas_id', $kelas_id)
      ->join('siswa', 'siswa.id=kelas_siswa.siswa_id', 'left')
      ->join('kelas', 'kelas.id=kelas_siswa.kelas_id', 'left')
      ->get('kelas_siswa')->result();


 // echo '<pre>'; print_r($data); echo '</pre>';die;
 
      $this->twig->display('detail_kelompok.html', $data);

    }

    function atur_anggota($segment_4 = '', $segment_5=''){
      $kelas_id = (int)$segment_4;
      $data['kelompok_id'] = (int)$segment_5;
      $data['nama_kelompok'] = $this->db->where('kelompok_id', (int)$segment_5)->get('kelompok')->row()->kelompok_nama;

      $data['siswa'] = $this->db->select('siswa.nama as nama_siswa, kelas.nama as nama_kelas, siswa.id as siswa_id, kelas_siswa.kelas_id as kelas_id')
                                ->where('kelas_id', $kelas_id)
                                ->join('siswa', 'siswa.id=kelas_siswa.siswa_id', 'left')
                                ->join('kelas', 'kelas.id=kelas_siswa.kelas_id', 'left')
                                ->get('kelas_siswa')->result();

                                // echo '<pre>'; print_r($data); echo '</pre>';die;

      $this->twig->display('atur-anggota.html', $data);
    }

    function update_kelompok_anggota($segment_4 ='', $segment_5 ='', $segment_6 = ''){
      $kelompok_id = (int)$segment_4;
      $siswa_id = (int)$segment_5;
      $kelas_id = (int)$segment_6;

      $data = array(
        'siswa_id' => $siswa_id,
        'kelompok_id' => $kelompok_id
      );
      
      $this->db->insert('kelompok_siswa', $data);
      redirect('kelompok/atur_anggota/'.$kelas_id.'/'.$kelompok_id);
    }

    function keluarkan_anggota($segment_4 ='', $segment_5 ='', $segment_6 = ''){
      $kelompok_id = (int)$segment_4;
      $siswa_id = (int)$segment_5;
      $kelas_id = (int)$segment_6;

      $this->db->where('siswa_id', $siswa_id)->delete('kelompok_siswa');
      redirect('kelompok/detail/'.$kelompok_id);

    }

    function add(){
      $kelompok_nama = $this->input->post('kelompok_nama');
      $kelas_id = $this->input->post('kelas_id');
      $pengajar_id = $this->input->post('pengajar_id');

      $data = array(
        'kelompok_nama' => $kelompok_nama,
        'kelas_id' => $kelas_id,
        'pengajar_id' => $pengajar_id
      );

      $this->db->insert('kelompok', $data);
      redirect('kelompok');
    }

    function delete($segment_4){
      $kelompok_id = (int)$segment_4;

      $where = array('kelompok_id' => $kelompok_id);

      $this->db->where($where)->delete('kelompok');
      $this->db->where($where)->delete('kelompok_siswa');
      redirect('kelompok');

    }

    function diskusi($segment_4=''){
      $kelompok_id = (int)$segment_4;
      if (is_pengajar() or is_admin()) {
        $pengirim_id = get_sess_data('user', 'id');
      }

    if (is_siswa()) {
      $where = array('kelompok_id' => $kelompok_id);
    }
    

    if (is_pengajar() or is_admin()) {
      $where = array('kelompok_id' => $kelompok_id);
      $data = array(
        'kelompok_id' => $kelompok_id,
        'pengajar_id' => $pengirim_id,
        'konten' => 'membuat forum diskusi',
        'date' => date('Y-m-d H:i:s')
      );
    } 
    
      
      if (is_pengajar() or is_admin()) {
        $cek = $this->db->get_where('diskusi', $where)->num_rows();
          if (empty($cek)) {
            $this->db->insert('diskusi', $data);
          }
      }
      

      $kelompok = $this->db->get_where('kelompok', array('kelompok_id' => $kelompok_id))->row();
      $data['nama_kelompok'] = $kelompok->kelompok_nama;
      $data['kelompok_id'] = $kelompok->kelompok_id;
      $data['data_terakhir'] = $this->db->select_max('id')->get('diskusi')->row()->id;
      
      $data['diskusi'] = $this->db->select('*, pengajar.nama as nama_pengajar, siswa.nama as nama_siswa, diskusi.id as diskusi_id, pengajar.jenis_kelamin as pengajar_jk, siswa.jenis_kelamin as siswa_jk, siswa.foto as siswa_foto, pengajar.foto as pengajar_foto')
                                  ->where($where)
                                  ->join('siswa', 'siswa.id = diskusi.siswa_id', 'left')
                                  ->join('pengajar', 'pengajar.id = diskusi.pengajar_id', 'left')
                                  ->order_by('diskusi.id', 'DESC')
                                  ->get('diskusi')->result();

      $this->twig->display('diskusi.html', $data);
    }

    function kirim_diskusi(){
      $kelompok_id = $this->input->post('kelompok_id');
      $pengirim_id = $this->input->post('pengirim_id');
      $konten = $this->input->post('konten');

      if (is_pengajar() or is_admin()) {
        $where = array('kelompok_id' => $kelompok_id, 'pengajar_id' => $pengirim_id);
          $data = array(
          'kelompok_id' => $kelompok_id,
          'pengajar_id' => $pengirim_id,
          'konten' => $konten,
          'date' => date('Y-m-d H:i:s')
        );
      } 
      
      if (is_siswa()) {
        $where = array('kelompok_id' => $kelompok_id);
          $data = array(
            'kelompok_id' => $kelompok_id,
            'siswa_id' => $pengirim_id,
            'konten' => $konten,
            'date' => date('Y-m-d H:i:s')
          );
      } 

      $this->db->insert('diskusi', $data);

      $kelompok = $this->db->get_where('kelompok', array('kelompok_id' => $kelompok_id))->row();
      $data['nama_kelompok'] = $kelompok->kelompok_nama;
      $data['kelompok_id'] = $kelompok->kelompok_id;
      $data['diskusi'] = $this->db->select('*, pengajar.nama as nama_pengajar, siswa.nama as nama_siswa, diskusi.id as diskusi_id')
                                  ->where($where)
                                  ->join('siswa', 'siswa.id = diskusi.siswa_id', 'left')
                                  ->join('pengajar', 'pengajar.id = diskusi.pengajar_id', 'left')
                                  ->get('diskusi')->result();
                                  
      redirect('kelompok/diskusi/'.$kelompok_id);
    }

}
