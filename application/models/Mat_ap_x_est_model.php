<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Mat_ap_x_est_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get mat_ap_x_est by mat_codigo
     */
    function get_mat_ap_x_est()
    {
        $mat_codigo=$this->uri->segment(3);
        $est_codigo=$this->uri->segment(4);
        return $this->db->get_where('mat_ap_x_est',array('mat_codigo'=>$mat_codigo,'est_codigo'=>$est_codigo))->row_array();
    }
    
    /*
     * Get all mat_ap_x_est
     */
    function get_all_mat_ap_x_est()
    {
        return $this->db->get('mat_ap_x_est')->result_array();
    }
    
    /*
     * function to add new mat_ap_x_est
     */
    function add_mat_ap_x_est($params)
    {
        $this->db->insert('mat_ap_x_est',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update mat_ap_x_est
     */
    function update_mat_ap_x_est($mat_codigo,$est_codigo,$params)
    {
        $this->db->where(array('mat_codigo'=>$mat_codigo,'est_codigo'=>$est_codigo));
        $response = $this->db->update('mat_ap_x_est',$params);
        if($response)
        {
            return "mat_ap_x_est updated successfully";
        }
        else
        {
            return "Error occuring while updating mat_ap_x_est";
        }
    }
    
    /*
     * function to delete mat_ap_x_est
     */
    function delete_mat_ap_x_est($mat_codigo,$est_codigo)
    {
        $response = $this->db->delete('mat_ap_x_est',array('mat_codigo'=>$mat_codigo,'est_codigo'=>$est_codigo));
        if($response)
        {
            return "mat_ap_x_est deleted successfully";
        }
        else
        {
            return "Error occuring while deleting mat_ap_x_est";
        }
    }
}