<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Dicta_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dicta by prof_codigo
     */
    function get_dicta()
    {
        $prof_codigo=$this->uri->segment(3);
        $mat_codigo=$this->uri->segment(4);
        return $this->db->get_where('dicta',array('prof_codigo'=>$prof_codigo,'mat_codigo'=>$mat_codigo))->row_array();
    }
    
    /*
     * Get all dicta
     */
    function get_all_dicta()
    {
        return $this->db->get('dicta')->result_array();
    }
    
    /*
     * function to add new dicta
     */
    function add_dicta($params)
    {
        $this->db->insert('dicta',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dicta
     */
    function update_dicta($prof_codigo,$mat_codigo,$params)
    {
        $this->db->where('prof_codigo',$prof_codigo,'mat_codigo',$mat_codigo);
        $response = $this->db->update('dicta',$params);
        if($response)
        {
            return "dicta updated successfully";
        }
        else
        {
            return "Error occuring while updating dicta";
        }
    }
    
    /*
     * function to delete dicta
     */
    function delete_dicta($prof_codigo,$mat_codigo)
    {
        $response = $this->db->delete('dicta',array('prof_codigo'=>$prof_codigo,'mat_codigo'=>$mat_codigo));
        if($response)
        {
            return "dicta deleted successfully";
        }
        else
        {
            return "Error occuring while deleting dicta";
        }
    }
}