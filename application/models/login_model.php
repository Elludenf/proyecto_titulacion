<?php
Class Login_model extends CI_Model
{
    public function login($username,$password) {

        $username="'".$username."'";
        $password="'".$password."'";

        $select="SELECT rolname, rolpassword";
        $from="from pg_authid";
        $where="where rolname=".$username." and rolpassword='md5' || MD5(".$password." || ".$username.");";
        $sql=$select." ".$from." ".$where;

        $query=$this -> db -> query($sql);
        $this -> db -> limit(1);



        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }


    }

    function logout(){

        $this->session->sess_destroy();
        $this->db->query('SET search_path TO titulacion');
        $this->db->query('Set role titulacion_db_admin');
    }
    public function set_role($username){
        $this->db->query('SET search_path TO titulacion');
        $this->db->query('Set role '.$username);
    }

    public function get_grup_role($username){
        return $this->db->query(' SELECT rolname FROM pg_roles WHERE pg_has_role( \''.$username.'\', oid, \'member\') LIMIT 1 offset 0;')->row_array();
    }
}
?>