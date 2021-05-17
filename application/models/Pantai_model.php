<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantai_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_pantai()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id_pantai','DESC');

        $query = $this->db->get('pantai');
        return $query->result();
    }

    public function get_all_favorit()
    {
        $query = $this->db->get_where('pantai', array('pantai.pantai_favorit' => 1));
                        
        return $query->result();
    }

    public function create_pantai($data)
    {
        return $this->db->insert('pantai', $data);
    }

    public function get_pantai_by_id($id)
	{
        $query = $this->db->get_where('pantai', array('pantai.id_pantai' => $id));
                        
        return $query->row();
    }

    public function update_pantai($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'pantai', $data, array('id_pantai'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function delete_pantai($id)
    {
            if ( !empty($id) ){
                $delete = $this->db->delete('pantai', array('id_pantai'=>$id) );
                return $delete ? true : false;
            } else {
                return false;
            }
    }

    public function generate_pantai_dropdown()
    {

        // Mendapatkan data ID dan nama kategori saja
        $this->db->select ('
            pantai.id_pantai,
            pantai.nama_pantai
        ');

        // Urut abjad
        $this->db->order_by('nama_pantai');

        $result = $this->db->get('pantai');
        
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dropdown[''] = 'Pilih pantai';

        if ($result->num_rows() > 0) {
            
            foreach ($result->result_array() as $row) {
                // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                $dropdown[$row['id_pantai']] = $row['nama_pantai'];
            }
        }

        return $dropdown;
    }
}

