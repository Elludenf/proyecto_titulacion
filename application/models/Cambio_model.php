<?php
Class Cambio_model extends CI_Model
{

    function cambio_ejecucion($username,$password)
    {
        $username="'".$username."'";
        $password="'".$password."'";
        $password_nuevo="'".$password_nuevo."'";

        $update="UPDATE pg_authid";
        $set="set rolpassword='md5' || md5(".$password_nuevo.")";
        $where="where rolname=".$username." and rolpassword='md5' || MD5(".$password." || ".$username.");";
        $sql=$update." ".$set." ".$where;

    }
    function cambio_ejecucion2($username,$password,$password_nuevo)
    {


        $password_nuevo="'".$password_nuevo."'";

        $sql="alter role ".$username." WITH PASSWORD ".$password_nuevo.";";
        $this -> db -> query($sql);

        $username="'".$username."'";
        
        $select="SELECT rolname, rolpassword";
        $from="from pg_authid";
        $where="where rolname=".$username." and rolpassword='md5' || MD5(".$password_nuevo." || ".$username.");";
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
}
?>