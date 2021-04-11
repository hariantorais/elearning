<?php


class Login_model extends CI_Model
{

    public function retrieve_new_log($limit = 10)
    {
        $this->db->order_by('lasttime', 'desc');
        $results = $this->db->get('login_log', $limit);
        return $results->result_array();
    }

    /**
     * Method untuk mendapatkan semua data login log
   
     */
    public function retrieve_all_log(
        $no_of_records = 10,
        $page_no       = 1,
        $login_id      = ""
    ) {
        $no_of_records = (int)$no_of_records;
        $page_no       = (int)$page_no;

        $where = array();
        if (!is_null($login_id)) {
            $where['login_id'] = array($login_id, 'where');
        }

        $orderby = array('id' => 'DESC');
        $data = $this->pager->set('login_log', $no_of_records, $page_no, $where, $orderby);

        return $data;
    }

    /**
     * Method untuk mendapatkan waktu aktifitas terahir
   
     */
    public function retrieve_last_activity($log_id)
    {
        $log = $this->retrieve_log($log_id);
        return $log['last_activity'];
    }

    /**
     * Method untuk update last_activity
  
     */
    public function update_last_activity($log_id, $time = "")
    {
        $this->db->where('id', $log_id);
        $this->db->update('login_log', array(
            'last_activity' => empty($time) ? time() : $time,
        ));
        return true;
    }

    /**
     * Method untuk mendapatkan login log terahir berdasarkan login_id
  
     */
    public function retrieve_last_log($login_id)
    {
        $this->db->where('login_id', $login_id);
        $this->db->order_by('id', 'desc');
        $result = $this->db->get('login_log', 1);
        return $result->row_array();
    }

    /**
     * Method untuk mendapatkan satu data log berdasarkan id
   
     */
    public function retrieve_log($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->get('login_log');
        return $result->row_array();
    }

    /**
     * Method untuk menambahkan riwayat log
   
     */
    public function create_log($login_id)
    {
        $this->db->insert('login_log', array(
            'login_id' => $login_id,
            'lasttime' => date('Y-m-d H:i:s'),
            'agent'    => json_encode(array(
                'is_mobile'    => ($this->agent->is_mobile()) ? 1 : 0,
                'browser'      => ($this->agent->is_browser()) ? $this->agent->browser() . ' ' . $this->agent->version() : '',
                'platform'     => $this->agent->platform(),
                'agent_string' => $this->agent->agent_string(),
                'ip'           => get_ip(),
            ))
        ));

        return $this->db->insert_id();
    }

    /**
     * Method untuk mendapatkan semua data user
     * @return array
     */
    public function retrieve_all_users()
    {
        $table_pengajar = $this->db->dbprefix('pengajar');
        $table_siswa    = $this->db->dbprefix('siswa');
        $table_login    = $this->db->dbprefix('login');

        $sql = "SELECT {$table_login}.username, {$table_pengajar}.nama FROM {$table_pengajar} INNER JOIN {$table_login} ON {$table_pengajar}.id = {$table_login}.pengajar_id
                UNION
                SELECT {$table_login}.username, {$table_siswa}.nama FROM {$table_siswa} INNER JOIN {$table_login} ON {$table_siswa}.id = {$table_login}.siswa_id";

        $result = $this->db->query($sql);

        $data = array();
        foreach ($result->result_array() as $r) {
            # selain yang login
            if (is_login() && $r['username'] == get_sess_data('login', 'username')) {
                continue;
            }
            $data[] = addslashes($r['nama']) . ' [' . $r['username'] . ']';
        }

        return $data;
    }

    /**
     * Method untuk menghapus data login
    
     */
    public function delete($id)
    {
        $id = (int)$id;

        $this->db->where('id', $id);
        $this->db->delete('login');
        return true;
    }

    /**
     * Method untuk mengambil banyak data login
     *
  
     */
    public function retrieve_all(
        $no_of_records = 10,
        $page_no       = 1,
        $is_admin      = 0,
        $pagination    = true
    ) {
        $no_of_records = (int)$no_of_records;
        $page_no       = (int)$page_no;
        $is_admin      = (int)$is_admin;

        $where = array();
        if ($is_admin) {
            $where['is_admin'] = array($is_admin, 'where');
        }

        $orderby = array('id' => 'DESC');

        if ($pagination) {
            $data = $this->pager->set('login', $no_of_records, $page_no, $where, $orderby);
        } else {
            $no_of_records = $this->db->count_all('login');
            $search_all    = $this->pager->set('login', $no_of_records, $page_no, $where, $orderby);
            $data          = $search_all['results'];
        }

        return $data;
    }

    /**
     * Method untuk mengambil satu data login
     *
   
     */
    public function retrieve(
        $id          = null,
        $username    = null,
        $password    = null,
        $siswa_id    = null,
        $pengajar_id = null,
        $is_admin    = null,
        $reset_kode  = null
    ) {
        if (!is_null($id)) {
            $id = (int)$id;
            $this->db->where('id', $id);
        }
        if (!is_null($username)) {
            $this->db->where('username', $username);
        }
        if (!is_null($password)) {
            $this->db->where('password', $password);
        }
        if (!is_null($siswa_id)) {
            $siswa_id = (int)$siswa_id;
            $this->db->where('siswa_id', $siswa_id);
        }
        if (!is_null($pengajar_id)) {
            $pengajar_id = (int)$pengajar_id;
            $this->db->where('pengajar_id', $pengajar_id);
        }
        if (!is_null($is_admin)) {
            $is_admin = (int)$is_admin;
            $this->db->where('is_admin', $is_admin);
        }
        if (!is_null($reset_kode)) {
            $this->db->where('reset_kode', $reset_kode);
        }

        $result = $this->db->get('login', 1);
        return $result->row_array();
    }

    /**
     * Method untuk mengupdate password login
    
     */
    public function update_password($id, $password)
    {
        $id = (int)$id;

        // $data = array('password' => md5($password));
        $data = array('password' => $password);

        $this->db->where('id', $id);
        $this->db->update('login', $data);
        return true;
    }

    /**
     * Method untuk memperbaharui data login
     *
     
     */
    public function update(
        $id,
        $username,
        $siswa_id    = null,
        $pengajar_id = null,
        $is_admin    = 0,
        $reset_kode  = null
    ) {
        $id = (int)$id;
        if (!is_null($siswa_id)) {
            $siswa_id = (int)$siswa_id;
        }
        if (!is_null($pengajar_id)) {
            $pengajar_id = (int)$pengajar_id;
        }
        $is_admin = (int)$is_admin;

        # cek username
        $this->db->where('id !=', $id);
        $this->db->where('username', $username);
        $result = $this->db->get('login');
        $check  = $result->row_array();
        if (!empty($check)) {
            throw new Exception("Username sudah digunakan.");
        }

        $data = array(
            'username'    => $username,
            'siswa_id'    => $siswa_id,
            'pengajar_id' => $pengajar_id,
            'is_admin'    => $is_admin,
            'reset_kode'  => $reset_kode
        );
        $this->db->where('id', $id);
        $this->db->update('login', $data);
        return true;
    }

    /**
     * Method untuk menambah data login
    
     */
    public function create(
        $username,
        $password,
        $siswa_id    = null,
        $pengajar_id = null,
        $is_admin    = 0
    ) {
        if (!is_null($siswa_id)) {
            $siswa_id = (int)$siswa_id;
        }
        if (!is_null($pengajar_id)) {
            $pengajar_id = (int)$pengajar_id;
        }
        $is_admin = (int)$is_admin;

        $data = array(
            'username'    => $username,
            'password'    => $password,
            'siswa_id'    => $siswa_id,
            'pengajar_id' => $pengajar_id,
            'is_admin'    => $is_admin,
            'reset_kode'  => null
        );
        $this->db->insert('login', $data);
        return $this->db->insert_id();
    }

    /**
     * Method tempat membuat tabel baru jika ada penambahan tabel
     * @return boolean
     * @since  1.8
     */
    public function alter_table()
    {
        $CI =& get_instance();
        $CI->load->model('config_model');

        $CI->config_model->create_tb_login_log();

        return true;
    }
}
