<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{
    function index()
    {
        must_login();

        $data = array();
        if (is_siswa()) {

            $kelas_aktif = $this->siswa_kelas_aktif;
            $retrieve_kelas = $this->kelas_model->retrieve($kelas_aktif['kelas_id']);
            
            $retrieve_all_materi = $this->materi_model->retrieve_allbysis(
                20,
                1,
                null,
                null,
                null,
                null,
                null,
                null,
                1,
                array($retrieve_kelas['id'])
            );
            $data['materi'] = $retrieve_all_materi['results'];
            
            
            # ambil semua data tugas
            $retrieve_all_tugas = $this->tugas_model->retrieve_all(
                10,
                1,
                null,
                null,
                null,
                array($kelas_aktif['kelas_id']),
                null,
                null
            );
            
            # ambil semua data mepel
            $data['mapels'] = $this->mapel_model->retrieve_all_mapel();
            

            // ambil data user
            $siswa_id = get_sess_data('user', 'id');

            $data['pengguna'] = $this->siswa_model->retrieve_user($siswa_id);

            $data['tugas_terbaru'] = $retrieve_all_tugas['results'];

            $data['tugas_selesai'] = $this->db->select('*')->from('nilai_tugas')->join('tugas','tugas.id=nilai_tugas.tugas_id')->where('siswa_id',$siswa_id)->get()->result();

            $where_pengumuman = array(
                'tgl_tampil <=' => date('Y-m-d'),
                'tgl_tutup >='  => date('Y-m-d'),
                'tampil_siswa'  => 1
            );
        }

        if (is_pengajar()) {
            $where_pengumuman = array(
                'tgl_tampil <='   => date('Y-m-d'),
                'tgl_tutup >='    => date('Y-m-d'),
                'tampil_pengajar' => 1
            );
        }

        if (is_admin()) {
            $data['jml_siswa']            = $this->siswa_model->count('total');
            $data['jml_siswa_pending']    = $this->siswa_model->count('pending');
            $data['jml_pengajar']         = $this->pengajar_model->count('total');
            $data['jml_pengajar_pending'] = $this->pengajar_model->count('pending');

            $data['info_update_link']   = $this->update_link;
            $data['portal_update_link'] = $this->portal_update_link;
            $data['bug_tracker_link']   = $this->bug_tracker_link;

            $html_js = load_comp_js(array(
                base_url('assets/comp/colorbox/jquery.colorbox-min.js'),
            ));
            $data['comp_js']  = $html_js;
            $data['comp_css'] = load_comp_css(array(base_url('assets/comp/colorbox/colorbox.css')));

            $where_pengumuman = array(
                'tgl_tampil <='   => date('Y-m-d'),
                'tgl_tutup >='    => date('Y-m-d')
            );

            $data['count_mapel_kelas'] = $this->mapel_model->count_kelas();
        }

        # ambil pengumuman yang sudah tampil
        $data['pengumuman'] = $this->pengumuman_model->retrieve_all_welcome(10, 1, $where_pengumuman, false);

        $this->twig->display('welcome.html', $data);
    }
    function pengaturan()
    {
        must_login();

        if (!is_admin()) {
            redirect('welcome');
        }

        if (!is_demo_app()) {
            # bagian hapus gambar
            if (!empty($_GET['delete-img'])) {
                $img_id = (int)$_GET['delete-img'];
                if ($img_id > 0 AND $img_id <= 4) {
                    $key      = 'img-slide-' . $img_id;
                    $retrieve = $this->config_model->retrieve($key);
                    if (!empty($retrieve) AND !empty($retrieve['value'])) {

                        # hapus file
                        if (is_file(get_path_image($retrieve['value']))) {
                            unlink(get_path_image($retrieve['value']));
                        }

                        $this->config_model->update($key, $key, '');

                    }
                }

                if ($img_id == 5) {
                    $key      = 'logo-sekolah';
                    $retrieve = $this->config_model->retrieve($key);
                    if (!empty($retrieve) AND !empty($retrieve['value'])) {

                        # hapus file
                        if (is_file(get_path_image($retrieve['value']))) {
                            unlink(get_path_image($retrieve['value']));
                        }

                        $this->config_model->update($key, $key, '');

                    }
                }

                redirect('welcome/pengaturan');
            }

            if ($this->form_validation->run('pengaturan') == true) {

                foreach ($_POST as $key => $val) {
                    # cek ada tidak, kalo ada update
                    $retrieve = $this->config_model->retrieve($key);
                    if (!empty($retrieve)) {
                        $this->config_model->update($key, $retrieve['nama'], $val);
                    } else {
                        $this->config_model->create($key, $key, $val);
                    }
                }

                # untuk upload gambar
                foreach ($_FILES as $key => $val) {
                    if (!empty($val['tmp_name'])) {
                        $config = array();
                        $config['upload_path']   = get_path_image();
                        $config['allowed_types'] = 'jpg|jpeg|png';
                        $config['max_size']      = '0';
                        $config['max_width']     = '0';
                        $config['max_height']    = '0';
                        $config['file_name']     = $key;
                        $this->upload->initialize($config);

                        if ($this->upload->do_upload($key)) {
                            # hapus file sebelumnya
                            $old_file = get_pengaturan($key, 'value');
                            if (is_file(get_path_image($old_file))) {
                                unlink(get_path_image($old_file));
                            }

                            $upload_data = $this->upload->data();

                            $retrieve = $this->config_model->retrieve($key);
                            if (!empty($retrieve)) {
                                $this->config_model->update($key, $key, $upload_data['file_name']);
                            } else {
                                $this->config_model->create($key, $key, $upload_data['file_name']);
                            }
                        }
                    }
                }

                $this->session->set_flashdata('pengaturan', get_alert('success', 'Pengaturan berhasil diperbaharui.'));
                redirect('welcome/pengaturan');
            }
        }

        $data['comp_js'] = get_texteditor();
        $this->twig->display('pengaturan.html', $data);
    }

    function search()
    {
        must_login();

        if (empty($_GET['q'])) {
            redirect('welcome');
        }

        $q = (string)$_GET['q'];
        $q = urldecode($q);

        if (is_siswa()) {
            $kelas_aktif = $this->siswa_kelas_aktif;
        }

        # cari siswa
        $retrieve_all_siswa = $this->siswa_model->retrieve_all_filter(
            $nis           = '',
            $nama          = $q,
            $jenis_kelamin = array(),
            $tahun_masuk   = '',
            $tempat_lahir  = '',
            $tgl_lahir     = '',
            $bln_lahir     = '',
            $thn_lahir     = '',
            $alamat        = '',
            $agama         = array(),
            $kelas_id      = array(),
            $status_id     = is_admin() ? array() : array(1, 2, 3),
            $username      = '',
            $page_no       = 1,
            $pagination    = false
        );

        foreach ($retrieve_all_siswa as $key => &$val) {
            $kelas_siswa = $this->kelas_model->retrieve_siswa(null, array(
                'siswa_id' => $val['id'],
                'aktif'    => 1
            ));

            # kelas aktif
            if (!empty($kelas_siswa) AND $val['status_id'] != 3) {
                $kelas              = $this->kelas_model->retrieve($kelas_siswa['kelas_id']);
                $val['kelas_aktif'] = $kelas;
            }

            $retrieve_all_siswa[$key] = $val;
        }

        # cari pengajar
        $retrieve_all_pengajar = $this->pengajar_model->retrieve_all_filter(
            $nip           = '',
            $nama          = $q,
            $jenis_kelamin = array(),
            $tempat_lahir  = '',
            $tgl_lahir     = '',
            $bln_lahir     = '',
            $thn_lahir     = '',
            $alamat        = '',
            $status_id     = is_admin() ? array() : array(1, 2),
            $username      = '',
            $is_admin      = '',
            $page_no       = 1,
            $pagination    = false
        );

        # cari materi
        $retrieve_all_materi = $this->materi_model->retrieve_all(
            $no_of_records = 10,
            $page_no       = 1,
            $pengajar_id   = array(),
            $siswa_id      = array(),
            $mapel_id      = array(),
            $judul         = $q,
            $konten        = null,
            $tgl_posting   = null,
            $publish       = null,
            $kelas_id      = array(),
            $type          = array(),
            $pagination    = false
        );

        # cari tugas
        $retrieve_all_tugas = $this->tugas_model->retrieve_all(
            $no_of_records = 10,
            $page_no       = 1,
            $mapel_id      = array(),
            $pengajar_id   = is_pengajar() ? array(get_sess_data('user', 'id')) : array(),
            $type_id       = array(),
            $kelas_id      = is_siswa() ? array($kelas_aktif['kelas_id']) : array(),
            $judul         = $q,
            $info          = null,
            $aktif         = array(),
            $pagination    = false
        );

        # cari pesan
        $retrieve_all_pesan = $this->msg_model->retrieve_all(10, $page_no, get_sess_data('login', 'id'), array('content' => $q), false);
        foreach ($retrieve_all_pesan as $key => &$val) {
            $retrieve_all_pesan[$key] = $this->format_msg($val);
        }

        # cari pengumuman
        if (is_siswa()) {
            $where_pengumuman = array(
                'tgl_tampil <=' => date('Y-m-d'),
                'tgl_tutup >='  => date('Y-m-d'),
                'tampil_siswa'  => 1
            );
        } elseif (is_pengajar()) {
            $where_pengumuman = array(
                'tgl_tampil <='   => date('Y-m-d'),
                'tgl_tutup >='    => date('Y-m-d'),
                'tampil_pengajar' => 1
            );
        } elseif (is_admin()) {
            $where_pengumuman = array();
        }
        $where_pengumuman = array_merge($where_pengumuman, array(
            'judul' => $q, 'konten' => $q
        ));

        $retrieve_all_pengumuman = $this->pengumuman_model->retrieve_all(10, 1, $where_pengumuman, false);
        foreach ($retrieve_all_pengumuman as $key => &$val) {
            $val['pengajar'] = $this->pengajar_model->retrieve($val['pengajar_id']);

            # allow action
            if (is_siswa()) {
                $allow_action = array('detail');
            } elseif (is_admin()) {
                $allow_action = array('detail', 'edit', 'delete');
            } elseif (is_pengajar()) {
                # kalo dia yang buat
                if ($val['pengajar_id'] == get_sess_data('user', 'id')) {
                    $allow_action = array('detail', 'edit', 'delete');
                } else {
                    $allow_action = array('detail');
                }
            }

            $val['allow_action'] = $allow_action;

            $retrieve_all_pengumuman[$key] = $val;
        }

        $results = array(
            'siswa'      => $retrieve_all_siswa,
            'pengajar'   => $retrieve_all_pengajar,
            'materi'     => $retrieve_all_materi,
            'tugas'      => $retrieve_all_tugas,
            'pesan'      => $retrieve_all_pesan,
            'pengumuman' => $retrieve_all_pengumuman
        );

        $data['results'] = $results;
        $data['keyword'] = $q;

        if (is_admin()) {
            # panggil colorbox
            $html_js = load_comp_js(array(
                base_url('assets/comp/colorbox/jquery.colorbox-min.js'),
            ));
            $data['comp_js']  = $html_js;
            $data['comp_css'] = load_comp_css(array(base_url('assets/comp/colorbox/colorbox.css')));
        }

        $this->twig->display('search-results.html', $data);
    }

    function donation()
    {
        $this->twig->display('donation.html');
    }

    function get_plugin()
    {
        must_login();

        if (!is_admin()) {
            redirect('welcome');
        }

        $plugin_url  = 'http://elearningplugin.dokumenary.net/index.php';
        $plugin_data = get_url_data($plugin_url);
        $result_body = json_decode($plugin_data, true);

        $data['plugins'] = $result_body;

        # panggil datatables
        $data['comp_js'] = load_comp_js(array(
            base_url('assets/comp/datatables/jquery.dataTables.js'),
            base_url('assets/comp/datatables/datatable-bootstrap2.js'),
        ));

        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/datatables/datatable-bootstrap2.css'),
        ));

        $this->twig->display('get-plugin.html', $data);
    }

    function backup_restore($act = "")
    {
        must_login();

        if (!is_admin()) {
            redirect('welcome');
        }

        $data = array();
        $this->twig->display('backup-restore.html', $data);
    }

    function hapus_data($segment_3 = "")
    {
        must_login();

        $data = array();

        switch ($segment_3) {
            case 'siswa':
                $this->form_validation->set_rules('siswa_id', 'Siswa ID', 'required|trim|xss_clean');
                if ($this->form_validation->run() == true) {

                    $data_gagal = array();
                    $siswa_ids  = explode(",", $this->input->post('siswa_id', true));
                    foreach ($siswa_ids as $siswa_id) {
                        $siswa_id = trim($siswa_id);

                        # check dulu
                        $db_siswa = $this->siswa_model->retrieve($siswa_id);
                        if (empty($db_siswa)) {
                            $data_gagal[] = $siswa_id;
                            continue;
                        }

                        $this->db->trans_start();

                        # hapus kelas_siswa
                        $this->db->where('siswa_id', $siswa_id);
                        $this->db->delete('kelas_siswa');

                        $db_login = $this->db->get_where('login', array('siswa_id' => $siswa_id))->row_array();

                        # hapus komentar
                        $this->db->where('login_id', $db_login['id']);
                        $this->db->delete('komentar');

                        # hapus kelas_materi dan materi
                        $db_materi = $this->db->get_where('materi', array('siswa_id' => $siswa_id))->result_array();
                        foreach ($db_materi as $row) {
                            # hapus kelas_materi
                            $this->db->where('materi_id', $row['id']);
                            $this->db->delete('kelas_materi');

                            # hapus komentar
                            $this->db->where('materi_id', $row['id']);
                            $this->db->delete('komentar');

                            # hapus materi
                            $this->db->where('id', $row['id']);
                            $this->db->delete('materi');
                        }

                        # hapus message
                        $this->db->where('owner_id', $db_login['id']);
                        $this->db->or_where('sender_receiver_id', $db_login['id']);
                        $this->db->delete('messages');

                        # hapus nilai tugas
                        $this->db->where('siswa_id', $siswa_id);
                        $this->db->delete('nilai_tugas');

                        # hapus login log
                        $this->db->where('login_id', $db_login['id']);
                        $this->db->delete('login_log');

                        # hapus login
                        $this->db->where('siswa_id', $siswa_id);
                        $this->db->delete('login');

                        # hapus siswa
                        $this->db->where('id', $siswa_id);
                        $this->db->delete('siswa');

                        $this->db->trans_complete();

                        if ($this->db->trans_status() === FALSE) {
                            $data_gagal[] = $siswa_id;
                        }
                    }

                    # redirect berhasil
                    if (empty($data_gagal)) {
                        $this->session->set_flashdata('hapus_data', get_alert('success', 'Hapus data siswa berhasil.'));
                    } else {
                        $flash_msg = "Siswa ID " . implode(", ", $data_gagal) . " gagal dihapus.";
                        $this->session->set_flashdata('hapus_data', get_alert('warning', $flash_msg));
                    }

                    redirect('welcome/hapus_data');
                }
            break;

            case 'pengajar':
                $this->form_validation->set_rules('pengajar_id', 'Pengajar ID', 'required|trim|xss_clean');
                if ($this->form_validation->run() == true) {

                    $data_gagal   = array();
                    $pengajar_ids = explode(",", $this->input->post('pengajar_id', true));
                    foreach ($pengajar_ids as $pengajar_id) {
                        $pengajar_id = trim($pengajar_id);

                        # cek dulu
                        $db_pengajar = $this->pengajar_model->retrieve($pengajar_id);
                        if (empty($db_pengajar)) {
                            $data_gagal[] = $pengajar_id;
                            continue;
                        }

                        $this->db->trans_start();

                        # hapus bank soal
                        if ($this->db->table_exists('bank_soal')) {
                            $this->db->where('pengajar_id', $pengajar_id);
                            $this->db->delete('bank_soal');
                        }

                        $db_login = $this->db->get_where('login', array('pengajar_id' => $pengajar_id))->row_array();

                        # hapus komentar
                        $this->db->where('login_id', $db_login['id']);
                        $this->db->delete('komentar');

                        # hapus kelas_materi dan materi
                        $db_materi = $this->db->get_where('materi', array('pengajar_id' => $pengajar_id))->result_array();
                        foreach ($db_materi as $row) {
                            # hapus kelas_materi
                            $this->db->where('materi_id', $row['id']);
                            $this->db->delete('kelas_materi');

                            # hapus komentar
                            $this->db->where('materi_id', $row['id']);
                            $this->db->delete('komentar');

                            # hapus materi
                            $this->db->where('id', $row['id']);
                            $this->db->delete('materi');
                        }

                        # hapus message
                        $this->db->where('owner_id', $db_login['id']);
                        $this->db->or_where('sender_receiver_id', $db_login['id']);
                        $this->db->delete('messages');

                        # hapus mapel ajar
                        $this->db->where('pengajar_id', $pengajar_id);
                        $this->db->delete('mapel_ajar');

                        # hapus pengumuman
                        $this->db->where('pengajar_id', $pengajar_id);
                        $this->db->delete('pengumuman');

                        # hapus tugas
                        $db_tugas = $this->db->get_where('tugas', array('pengajar_id' => $pengajar_id))->result_array();
                        foreach ($db_tugas as $row) {
                            # hapus tugas kelas
                            $this->db->where('tugas_id', $row['id']);
                            $this->db->delete('tugas_kelas');

                            # hapus tugas pertanyaan
                            $db_pertanyaan = $this->db->get_where('tugas_pertanyaan', array('tugas_id' => $row['id']))->result_array();
                            foreach ($db_pertanyaan as $pertanyaan) {
                                # hapus semua pilihan
                                $this->db->where('pertanyaan_id', $pertanyaan['id']);
                                $this->db->delete('pilihan');

                                $this->db->where('id', $pertanyaan['id']);
                                $this->db->delete('tugas_pertanyaan');
                            }

                            # hapus nilai tugas
                            $this->db->where('tugas_id', $row['id']);
                            $this->db->delete('nilai_tugas');

                            # hapus tugas
                            $this->db->where('id', $row['id']);
                            $this->db->delete('tugas');
                        }

                        # hapus login log
                        $this->db->where('login_id', $db_login['id']);
                        $this->db->delete('login_log');

                        # hapus login
                        $this->db->where('pengajar_id', $pengajar_id);
                        $this->db->delete('login');

                        # hapus pengajar
                        $this->db->where('id', $pengajar_id);
                        $this->db->delete('pengajar');

                        $this->db->trans_complete();

                        if ($this->db->trans_status() === FALSE) {
                            $data_gagal[] = $pengajar_id;
                        }
                    }

                    # redirect berhasil
                    if (empty($data_gagal)) {
                        $this->session->set_flashdata('hapus_data', get_alert('success', 'Hapus data pengajar berhasil.'));
                    } else {
                        $flash_msg = "Pengajar ID " . implode(", ", $data_gagal) . " gagal dihapus.";
                        $this->session->set_flashdata('hapus_data', get_alert('warning', $flash_msg));
                    }

                    redirect('welcome/hapus_data');
                }
            break;

            case 'tugas':
                $this->form_validation->set_rules('tugas_id', 'Tugas ID', 'required|trim|xss_clean');
                if ($this->form_validation->run() == true) {

                    $data_gagal = array();
                    $tugas_ids  = explode(",", $this->input->post('tugas_id', true));
                    foreach ($tugas_ids as $tugas_id) {
                        $tugas_id = trim($tugas_id);

                        #cek dulu
                        $db_tugas = $this->tugas_model->retrieve($tugas_id);
                        if (empty($db_tugas)) {
                            $data_gagal[] = $tugas_id;
                            continue;
                        }

                        $this->db->trans_start();

                        # hapus tugas kelas
                        $this->db->where('tugas_id', $tugas_id);
                        $this->db->delete('tugas_kelas');

                        # hapus tugas pertanyaan
                        $db_pertanyaan = $this->db->get_where('tugas_pertanyaan', array('tugas_id' => $tugas_id))->result_array();
                        foreach ($db_pertanyaan as $pertanyaan) {
                            # hapus semua pilihan
                            $this->db->where('pertanyaan_id', $pertanyaan['id']);
                            $this->db->delete('pilihan');

                            $this->db->where('id', $pertanyaan['id']);
                            $this->db->delete('tugas_pertanyaan');
                        }

                        # hapus nilai tugas
                        $this->db->where('tugas_id', $tugas_id);
                        $this->db->delete('nilai_tugas');

                        # hapus tugas
                        $this->db->where('id', $tugas_id);
                        $this->db->delete('tugas');

                        $this->db->trans_complete();

                        if ($this->db->trans_status() === FALSE) {
                            $data_gagal[] = $tugas_id;
                        }
                    }

                    # redirect berhasil
                    if (empty($data_gagal)) {
                        $this->session->set_flashdata('hapus_data', get_alert('success', 'Hapus data tugas berhasil.'));
                    } else {
                        $flash_msg = "Tugas ID " . implode(", ", $data_gagal) . " gagal dihapus.";
                        $this->session->set_flashdata('hapus_data', get_alert('warning', $flash_msg));
                    }

                    redirect('welcome/hapus_data');
                }
            break;
        }

        $this->twig->display('hapus-data.html', $data);
    }

    function mapel_sesi($segment_4 = ''){
        must_login();
        $id_mapel = (int)$segment_4;
        
        $siswa_id = get_sess_data('user', 'id');
        
        $kelas_siswa = $this->kelas_model->retrieve_siswa(null, array(
            'siswa_id' => $siswa_id,
            'aktif'    => 1
        ));

        # kelas aktif
        if (!empty($kelas_siswa)) {
            $kelas              = $this->kelas_model->retrieve($kelas_siswa['kelas_id']);
            $kelas_id = $kelas['id'];
        }
        
        $data['mapel'] = $this->mapel_model->get_mapel($id_mapel, $kelas_id);
 
        $data['tugas_selesai'] = $this->db->select('*')->from('nilai_tugas')->join('tugas','tugas.id=nilai_tugas.tugas_id')->where('siswa_id',$siswa_id)->where('tugas.mapel_id',$id_mapel)->order_by('sesi', 'DESC')->get()->result();

        $data['tugas_terbaru'] = $this->db->select('*', 'tugas.id as tugas_id')
                                          ->from('tugas')
                                          ->where(array(
                                              'tampil_siswa' => 1,
                                              'tugas.mapel_id' => $id_mapel, 
                                              'tugas_kelas.kelas_id' => $kelas_id 
                                              ))
                                          ->join('tugas_kelas', 'tugas_kelas.tugas_id=tugas.id')
                                          ->order_by('sesi', 'DESC')
                                          ->get()->result();
        
        $data['mapel_sesi'] = $this->mapel_model->retrieve_mapel_sesi($id_mapel,$kelas_id);
        $this->twig->display('list-sesi.html', $data);
    }

    function download_materi($segment_4 = '', $segment_5=''){
        $file = $segment_4;
        $materi_id = (int)$segment_5;
        $siswa_id = get_sess_data('user', 'id');

        $cek = $this->db->get_where('absen_siswa', array('siswa_id' => $siswa_id, 'materi_id'=>$materi_id))->num_rows();
        if ($cek > 0) {
            redirect(base_url('userfiles/files/'.$file));
        } else {
            $data = array(
                'materi_id' => $materi_id,
                'siswa_id' => $siswa_id,
                'absen' => 1,
                'waktu' => date('Y-m-d H:i:s')
            );
            
            $this->absen_model->input_data($data, 'absen_siswa');
            redirect(base_url('userfiles/files/'.$file));
        }
        
    }

    function detail($segment_3 = '', $segment_4 = '', $segment_5 = '')
    {
        $materi_id = (int)$segment_4;

        if (empty($materi_id)) {
            show_404();
        }

        $materi = $this->materi_model->retrieve($materi_id);
        if (empty($materi)) {
            show_404();
        }

        if (is_siswa() && empty($materi['publish'])) {
            show_404();
        } else {
            # cek sesuai kelas aktif tidak
        }

        /**
         * jika pengajar cek kepemilikan untuk yang konsep
         */
        if (is_pengajar() && $materi['publish'] == '0' && $materi['pengajar_id'] != get_sess_data('user', 'id')) {
            show_404();
        }

        # tambah views jika materi terfulis
        if (empty($materi['file'])) {
            $plus_views = false;

            # buat session kalo sudah baca materi yan ini
            $session_read = $this->session->userdata('read_materi');
            if (empty($session_read)) {
                $this->session->set_userdata(array('read_materi' => array($materi['id'])));
                $plus_views = true;
            } else {
                if (!in_array($materi['id'], $session_read)) {
                    $plus_views = true;
                }
            }

            if ($plus_views) {
                $this->materi_model->plus_views($materi['id']);
            }
        }

        $data['materi'] = $materi;

        switch ($segment_4) {
            default:
            case 'download':
                # jika request download
                if ($segment_4 == 'download' AND !empty($materi['file'])) {
                    $target_file = get_path_file($materi['file']);
                    if (!is_file($target_file)) {
                        show_error("Maaf file tidak ditemukan.");
                    }

                    $data_file = file_get_contents($target_file); // Read the file's contents
                    $name_file = $materi['file'];

                    $this->materi_model->plus_views($materi['id']);

                    force_download($name_file, $data_file);
                }


                # post komentar
                $this->form_validation->set_rules('komentar', 'Komentar', 'required');
                if ($this->form_validation->run() == true) {
                    $komentar_id = $this->komentar_model->create(
                        get_sess_data('login', 'id'),
                        $materi['id'],
                        $tampil = 1,
                        $this->input->post('komentar', true)
                    );

                    redirect('welcome/mapel_sesi/' . $materi['mapel_id']);
                }

                $data['materi']['download_link'] = site_url('materi/detail/'.$materi['id'].'/download');

                # ambil komentar
                $retrieve_all_komentar = $this->komentar_model->retrieve_all(20, (int)$segment_4, null, $materi['id'], 1);

                # format komentar
                foreach ($retrieve_all_komentar['results'] as $key => $val) {
                    $retrieve_all_komentar['results'][$key] = $this->format_komentar($val);
                }

                $data['materi']['komentar']            = $retrieve_all_komentar['results'];
                $data['materi']['jml_komentar']        = $retrieve_all_komentar['total_record'];
                $data['materi']['komentar_pagination'] = $this->pager->view($retrieve_all_komentar, 'materi/detail/' . $materi['id'] . '/');

                # cari tipenya
                if (empty($materi['file'])) {
                    $type = 'tertulis';
                } else {
                    $type = 'file';
                    $data['materi']['file_info']         = get_file_info(get_path_file($materi['file']));
                    $data['materi']['file_info']['mime'] = get_mime_by_extension(get_path_file($materi['file']));
                }

                $data['type'] = $type;
                $data['materi']['mapel'] = $this->mapel_model->retrieve($materi['mapel_id']);

                # cari materi kelas
                $arr_materi_kelas_id = array();
                $materi_kelas        = $this->materi_model->retrieve_all_kelas($materi['id']);
                foreach ($materi_kelas as $mk) {
                    $arr_materi_kelas_id[]            = $mk['kelas_id'];
                    $kelas                            = $this->kelas_model->retrieve($mk['kelas_id']);
                    $data['materi']['materi_kelas'][] = $kelas;
                }

                /**
                 * Jika siswa cek dengan kelas aktif
                 */
                if (is_siswa()) {
                    $kelas_aktif = $this->siswa_kelas_aktif;
                    $retrieve_kelas = $this->kelas_model->retrieve($kelas_aktif['kelas_id']);

                    $kelas_valid = false;
                    foreach ($arr_materi_kelas_id as $mk_id) {
                        if ($mk_id == $retrieve_kelas['id']) {
                            $kelas_valid = true;
                            break;
                        }
                    }

                    if ($kelas_valid == false) {
                        $this->session->set_flashdata('materi', get_alert('warning', 'Materi tidak tersedia untuk kelas Anda.'));
                        redirect('materi');
                    }
                }

                # cari pembuatnya
                if (!empty($materi['pengajar_id'])) {
                    $pengajar = $this->pengajar_model->retrieve($materi['pengajar_id']);
                    $data['materi']['pembuat'] = array(
                        'nama'      => $pengajar['nama'],
                        'link_foto' => get_url_image_pengajar($pengajar['foto'], 'medium', $pengajar['jenis_kelamin'])
                    );
                    if (is_admin()) {
                        $data['materi']['pembuat']['link_profil'] = site_url('pengajar/detail/'.$pengajar['status_id'].'/'.$pengajar['id']);
                    } else {
                        $data['materi']['pembuat']['link_profil'] = site_url('pengajar/detail/'.$pengajar['id']);
                    }
                }

                if (!empty($materi['siswa_id'])) {
                    $siswa = $this->siswa_model->retrieve($materi['siswa_id']);
                    $data['materi']['pembuat'] = array(
                        'nama'        => $siswa['nama'],
                        'link_foto'   => get_url_image_siswa($siswa['foto'], 'medium', $siswa['jenis_kelamin'])
                    );

                    if (is_admin()) {
                        $data['materi']['pembuat']['link_profil'] = site_url('siswa/detail/'.$siswa['status_id'].'/'.$siswa['id']);
                    } else {
                        $data['materi']['pembuat']['link_profil'] = site_url('siswa/detail/'.$siswa['id']);
                    }
                }

                # cari materi terkait
                $retrieve_terkait_mapel = $this->materi_model->retrieve_all(
                    $no_of_records = 10,
                    $page_no       = 1,
                    $pengajar_id   = array(),
                    $siswa_id      = array(),
                    $mapel_id      = array($materi['mapel_id']),
                    $judul         = null,
                    $konten        = null,
                    $tgl_posting   = null,
                    $publish       = 1,
                    $kelas_id      = array(),
                    $type          = array(),
                    $pagination    = false
                );

                $data_terkait = array();
                foreach ($retrieve_terkait_mapel as $row) {
                    if (empty($data_terkait[$row['id']]) AND $row['id'] != $materi['id'] AND count($data_terkait) <= 20) {
                        $data_terkait[$row['id']] = $row;
                    }
                }

                $retrieve_terkait_kelas = $this->materi_model->retrieve_all(
                    $no_of_records = 10,
                    $page_no       = 1,
                    $pengajar_id   = array(),
                    $siswa_id      = array(),
                    $mapel_id      = array(),
                    $judul         = null,
                    $konten        = null,
                    $tgl_posting   = null,
                    $publish       = 1,
                    $kelas_id      = $arr_materi_kelas_id,
                    $type          = array(),
                    $pagination    = false
                );

                foreach ($retrieve_terkait_kelas as $row) {
                    if (empty($data_terkait[$row['id']]) AND $row['id'] != $materi['id'] AND count($data_terkait) <= 20) {
                        $data_terkait[$row['id']] = $row;
                    }
                }

                $siswa_idabsen = get_sess_data('user', 'id');

                $data['absen'] = $this->absen_model->getdata($materi_id, $siswa_idabsen);

                $data['terkait'] = $data_terkait;

                # setup texteditor
                $html_js = get_texteditor();

                # setup colorbox
                $html_js .= load_comp_js(array(
                    base_url('assets/comp/colorbox/jquery.colorbox-min.js'),
                ));

                $data['comp_js']  = $html_js;
                $data['comp_css'] = load_comp_css(array(
                    base_url('assets/comp/colorbox/colorbox.css')
                ));

                $this->twig->display('detail-materi.html', $data);
            break;
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
