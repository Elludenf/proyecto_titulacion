<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Pg_authid_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    private $table = "pg_catalog.pg_authid";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }
    /*
     * Get pg_authid by rolename
     */
    function get_pg_authid($rolname)
    {
        $pg_authid = $this->db->query("
            SELECT
                rolname,rolpassword

            FROM
                pg_catalog.pg_authid

            WHERE
                rolname = ?
        ",array($rolname))->row_array();

        return $pg_authid;
    }
    
    /*
     * Get all pg_authid
     */
    function get_all_pg_authid($limit = 5)
    {
        $offset = $this->uri->segment(3);
        $pg_authid = $this->db->limit($limit, $offset)
            ->query('SELECT rolname,rolpassword FROM pg_catalog.pg_authid WHERE rolinherit = TRUE')->result_array();

        return $pg_authid;
    }

    /*
     * Get group rol
     */
    function get_rol($rolname)
    {
        $rolname="'".$rolname."'";
        $oid=$this->db->query('select oid from pg_catalog.pg_roles where rolname='.$rolname);
        $rol_name=$this->db->query('SELECT 
  pg_roles.rolname
FROM 
  pg_catalog.pg_roles
WHERE 
  pg_roles.oid = (select roleid from pg_catalog.pg_auth_members where member=(select oid from pg_catalog.pg_roles where rolname='.$rolname.'))');
        //$oid="'".$oid."'";
        //$rol_oid=$this->db->query('select roleid from pg_catalog.pg_auth_members where member='.$oid);
        //$rol_name=$this->db->query('select rolname from pg_catalog.pg_roles oid rolname='.$rol_oid);

        return $rol_name;
    }


    /*
     * function to add new pg_authid
     */
    function add_pg_authid($params)
    {
        $pass="'".$params['rolpassword']."'";
        $this->db->query('CREATE ROLE '.$params['rolname'].' LOGIN ENCRYPTED PASSWORD '.$pass.'; GRANT "'.$params['rol'].'" TO '.$params['rolname'].'');
        //return $this->db->insert_id();
    }
    
    /*
     * function to update pg_authid
     */
    function update_pg_authid($rolname,$params)
    {
        $this->db->where('rolname',$rolname);
        $response = $this->db->update('pg_authid',$params);
        if($response)
        {
            return "pg_authid updated successfully";
        }
        else
        {
            return "Error occuring while updating pg_authid";
        }
    }
    
    /*
     * function to delete pg_authid
     */
    function delete_pg_authid($rolname)
    {
        $response = $this->db->delete('pg_authid',array('rolename'=>$rolname));
        if($response)
        {
            return "pg_authid deleted successfully";
        }
        else
        {
            return "Error occuring while deleting pg_authid";
        }
    }
}
