<?php

class User_model extends CI_Model {

    public function get_user()
    {
        $arr= $this->db->get('tb_user')
                       ->result();
        return $arr;
        
        if($query->num_rows() > 0)
        {
            $session = array('username'  =>$username,
                             'password'  =>$password,
                             'login_status'=> TRUE
        );
        $this->session->set_userdata($session);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function add_user()
    {
        $arr['email'] =$this->input->post('email');
        $arr['username']  =$this->input->post('username');
        $arr['password']  =md5($this->input->post('password'));

        $ql_masuk=$this->db->insert('tb_user',$arr);
        return $ql_masuk;
    }

    public function hapus_user($id) {
        $this->db->where('id_user', $id)
                 ->delete('tb_user');

        if($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_data_user_by_id($id)
    {
        return $this->db->where('id_user', $id)
                        ->get('tb_user')
                        ->row();
    }

    public function edit()
    {
        $user = array(
            'email'       => $this->input->post('email_edit'),
            'username'    => $this->input->post('username_edit'),
            'password'    => md5($this->input->post('password_edit')),
        );

        $this->db->where('id_user', $this->input->post('id_user_edit'))
                 ->update('tb_user', $user);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}