<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como parámetro o no
    public function users_entrys($id = false)
    {
        if($id === false)
        {
            $this->db->select('u.username,u.fname,u.lname,u.register_date,e.titulo,e.entrada,e.publish_date');
            $this->db->from('users_consultas u');
            $this->db->join('entradas_consultas e', 'u.id = e.id_user');
        }else{
            $this->db->select('u.username,u.fname,u.lname,u.register_date,e.titulo,e.entrada,e.publish_date');
            $this->db->from('users_consultas u');
            $this->db->join('entradas_consultas e', 'u.id = e.id_user');
            $this->db->where('u.id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function users_coments($id = false)
    {
        if($id === false)
        {
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios_consultas c');
            $this->db->join('users_consultas u', 'c.id_user = u.id');
        }else{
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios_consultas c');
            $this->db->join('users_consultas u', 'c.id_user = u.id');
            $this->db->where('u.id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function consulta_encadendada($id)
    {
        $this->db->select('username')->from('users_consultas')->where('id >=', $id)->limit(10, 20);
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function search_users($string,$pos_comodin)
    {
        $this->db->like('username', $string, $pos_comodin);
        $query = $this->db->get('users_consultas');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function count_results($table)
    {
        return $this->db->count_all_results($table);
    }

    public function consulta_get_where($id)
    {
        $query = $this->db->get_where('users_consultas',array('id' => $id));
        if($query->num_rows() > 0 )
        {
            //veamos que sólo retornamos una fila con row(), no result()
            return $query->row();
        }
    }

    public function insert_user()
    {
        $data = array(
            'username'       =>   'Juan68',
            'fname'          =>   'Juan',
            'lname'          =>   'Pérez',
            'register_date'  =>    '2013-01-19 10:00:00'
            );
            $this->db->insert('users_consultas',$data);
    }

    public function delete_user()
    {
        $this->db->delete('users_consultas', array('id' => 1));
    }

    public function update_user()
    {
        $data = array(
            'username' => 'silvia',
            'fname' => 'madrejo',
            'lname' => 'sánchez'
        );
        $this->db->where('id', 3);
        $this->db->update('users_consultas', $data);
    }
}
/*
 * end of application/models/consultas_model.php
 */