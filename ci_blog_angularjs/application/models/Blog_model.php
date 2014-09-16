<?php

defined("BASEPATH") or die("El acceso al script no está permitido");

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * @desc logueamos a los usuarios
     * @param username - string
     * @param password - string
     * @param auth - string login o register
     */
    public function authUser($username, $password, $auth) {
        if ($auth === "login") {
            $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

            if ($query->num_rows() === 1) {
                return $query->row()->id;
            } else {
                return false;
            }
        } else {
            $data = array(
                "username" => $username,
                "password" => $password
            );

            $query = $this->db->insert('users', $data);

            if ($query) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @desc obtiene todos los posts
     */
    public function allPosts() {
        //el último el primero
        $this->db->order_by("id", "desc");
        return $this->db->get("posts")->result();
    }

    /**
     * @desc obtiene todos los posts de un usuario
     * @param $user_id - int contiene el id del usuario del post
     */
    public function allMyPosts($user_id) {
        return $this->db->get_where("posts", array("user_id" => $user_id))->result();
    }

    /**
     * @desc obtiene un post por su id
     * @param $id - int contiene el id del post
     * @param $user_id - int contiene el id del usuario del post
     */
    public function getOnePost($user_id, $post_id) {
        return $this->db->get_where("posts", array("user_id" => $user_id, "id" => $post_id))->row();
    }

    /**
     * @desc eliminamos un post por su id
     * @param $id - int contiene el id del post
     */
    public function deletePost($id) {
        $this->db->where("id", $id);
        return $this->db->delete("posts");
    }

    /**
     * @desc actualiza un post por su id
     * @param $id - int contiene el id del post
     * @param $title - string contiene el titulo del post
     * @param $content - string contiene el contenido del post
     */
    public function updatePost($id, $title, $content) {
        $data = array(
            "title" => $title,
            "content" => $content
        );
        $this->db->where("id", $id);
        return $this->db->update("posts", $data);
    }

    public function newPost($user_id, $title, $content) {
        $data = array(
            "user_id" => $user_id,
            "title" => $title,
            "content" => $content
        );

        $query = $this->db->insert('posts', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

}
