<?php
class Queries extends CI_Model {
    public function getPosts(){
        $query = $this->db->get('posts');

            return $query->result();


    }

    public function addPost($data){
        return $this->db->insert('posts', $data);


    }
}
