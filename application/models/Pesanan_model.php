<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pesanan_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
        }

        public function get_all_pesanan() {
            // Query Manual
            // $query = $this->db->query('
            //      SELECT * FROM pesanan
            //  ');

            // Memakai Query Builder
            // Urutkan berdasar id

            $query = $this->db->get('pesanan');

            // Return dalam bentuk object
            return $query->result();
        }

        public function get_total() 
        {
            // Dapatkan jumlah total artikel
            return $this->db->count_all("pesanan");
        }

        public function get_pesanan_by_id($id)
        {
            $query = $this->db->get_where('pesanan', array('pesanan.id_pesanan' => $id));
                        
            return $query->row();
        }

        public function create_pesanan()
        {
             $data = array(
                'nama_penum'        => $this->input->post('nama_penum'),
                'no_penum'        => $this->input->post('no_penum'),
                'asal_penum'        => $this->input->post('asal_penum'),
                'tujuan_penum'          => $this->input->post('tujuan_penum'),
                'tggl_penum'          => $this->input->post('tggl_penum')
            );

            return $this->db->insert('pesanan', $data);
        }

        public function update_pesanan($data, $id) 
        {
            if ( !empty($data) && !empty($id) ){
                $update = $this->db->update( 'pesanan', $data, array('id_pesanan'=>$id) );
                return $update ? true : false;
            } else {
                return false;
            }
        }

        public function delete_pesanan($id)
        {
            if ( !empty($id) ){
                $delete = $this->db->delete('pesanan', array('id_pesanan'=>$id) );
                return $delete ? true : false;
            } else {
                return false;
            }
        }

    }