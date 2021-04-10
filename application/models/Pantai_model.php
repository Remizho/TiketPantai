<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_listpantai()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id_list','DESC');

        $query = $this->db->get('listpantai');
        return $query->result();
    }

    public function create_listpantai()
    {
        $data = array(
                'nama_pantai'          => $this->input->post('nama_pantai'),
                'harga_tiket'          => $this->input->post('harga_tiket'),
                'gambar'          => $this->input->post('gambar'),
            );
        return $this->db->insert('listpantai', $data);
    }

    public function get_listpantai_by_id($id)
	{
        $query = $this->db->get_where('listpantai', array('listpantai.id_list' => $id));
                        
        return $query->row();
    }

    public function update_listpantai($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'listpantai', $data, array('id_list'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function delete_listpantai($id)
        {
            if ( !empty($id) ){
                $delete = $this->db->delete('listpantai', array('id_list'=>$id) );
                return $delete ? true : false;
            } else {
                return false;
            }
        }
    }

