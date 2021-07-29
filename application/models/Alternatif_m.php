<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alternatif_m extends CI_Model {


        public function get($id = null)
        {
                $this->db->from('alternatif');
                if($id != null) {
                        $this->db->where('alternatif_id', $id);
                }
                $query = $this->db->get();
                return $query;
        }

        /*public function add($post)
        {
            $params = [
                'name' => $post['alternatif_name'],
                'phone' => $post['phone'],
                'address' => $post['addr'],
                'description' => empty($post['desc']) ? null : $post['desc'],
            ];
            $this->db->insert('alternatif', $params);
        }*/

        public function add($post)
        {
            $params = [
                'name' => $post['alternatif_name'],
                'address' => $post['addr'],
                'gender' => $post['gender'],
                'email' => $post['email'],
                'kode' => $post['kode'],
            ];
            $this->db->insert('alternatif', $params);

                /*$params['name'] = $post['alternatif_name'];
                $params['phone'] = $post['phone'];
                $params['address'] = ($post['addr']);
                $params['description'] = $post['desc'] != "" ? $post['desc'] : null;
                $this->db->insert('alternatif', $params); */
        }

        public function edit($post)
        {
            $params = [
                'name' => $post['alternatif_name'],
                'address' => $post['addr'],
                'gender' => $post['gender'],
                'email' => $post['email'],
                'kode' => $post['kode'],
                'updated' => date('Y-m-d H:i:s')
            ];
            $this->db->where('alternatif_id', $post['id']);
            $this->db->update('alternatif', $params);

        }

        function check_kode($code, $id = null){
            $this->db->from('alternatif');
            $this->db->where('kode', $code);
            if($id != null) {
                $this->db->where('alternatif_id !=', $id);
            }
            $query = $this->db->get();
            return $query;
        }

        public function del($id)
        {

                $this->db->where('alternatif_id', $id);
                $this->db->delete('alternatif');
        }
}
