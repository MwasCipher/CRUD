<?php
class Queries extends CI_Model {
    public function getPosts(){
        $query = $this->db->get('posts');

        if ($query->num_rows() > 0){

            return $query->result();
        }


    }

    public function addPost($data){
        return $this->db->insert('posts', $data);


    }

    public function getSinglePost($id){
        $query = $this->db->get_where('posts', array('id'=> $id));

        if ( $query-> num_rows() > 0 ){

            return $query-> row();
        }
    }
}
