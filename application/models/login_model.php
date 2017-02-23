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

}
?>