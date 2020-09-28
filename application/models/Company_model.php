<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model{

    // UNFINISHED CODE... SOMEONE PLEASE HELP ME :(
    public function editCompany($data)
    {
        // if user upload file
        if ($data['image']){
            // configuration
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/img/company/';
            $config['max_size']             = 100000;

            $this->load->library('upload');
            $this->upload->initialize($config);
           
            if ($this->upload->do_upload('image')){
                
                $old_image = $this->user['image'];
                // hapus gambar sebelumnya kecuali gambar default
               if ($old_image != 'default.jpg'){
                    // var_dump( FCPATH . 'assets/img/company/' . $old_image);die;
                    unlink(FCPATH . 'assets/img/company/' . $old_image);
               }

                $this->db->set('image', $data['image']);
            }else{
                message($this->upload->display_errors(), 'danger', 'admin/company');
            }
        }

        // if user upload file
        if ($data['favicon']){
            // configuration
            $config['allowed_types']        = 'gif|jpg|png';
            $config['upload_path']          = './assets/img/company/';
            $config['max_size']             = 100000;

            $this->load->library('upload');
            $this->upload->initialize($config);
           
            if ($this->upload->do_upload('favicon')){
                
                $old_favicon = $this->user['favicon'];
                // hapus gambar sebelumnya kecuali gambar default
               if ($old_favicon != 'default.jpg'){
                    // var_dump( FCPATH . 'assets/img/company/' . $old_favicon);die;
                    unlink(FCPATH . 'assets/img/company/' . $old_favicon);
               }

                $this->db->set('favicon', $data['favicon']);
            }else{
                message($this->upload->display_errors(), 'danger', 'admin/company');
            }
        }

        $this->db->set('id', $data['id']);
        $this->db->set('name', $data['name']);
        $this->db->set('address', $data['address']);
        $this->db->set('phone', $data['phone']);
        $this->db->set('fax', $data['fax']);
        $this->db->set('email', $data['email']);
        $this->db->set('term', $data['term']);
        $this->db->where('id', $data['id']);
        $this->db->update('user_company');

        message('Company Profile has been updated!', 'success', 'admin/company');
    }

    public function getCompanyById($id)
    {
        return $this->db->get_where('user_company', ['id' => $this->session->userdata('id')])->row_array();
    }

    public function getCompany()
    {
        return $this->db->get('user_company')->result_array();
    }
}