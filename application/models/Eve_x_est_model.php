<?php
/**
 * Created by PhpStorm.
 * User: rober_000
 * Date: 23-Apr-17
 * Time: 5:02 PM
 */
/**
 * Generated by CRUDigniter v3.0 Beta
 * www.crudigniter.com
 */

class Eve_x_est_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get eve_x_est by est_codigo
     */
    function get_eve_x_est($est_codigo)
    {
        return $this->db->get_where('eve_x_est',array('est_codigo'=>$est_codigo))->row_array();
    }

    /*
     * Get all eve_x_est
     */
    function get_all_eve_x_est()
    {
        return $this->db->get('eve_x_est')->result_array();
    }

    /*
     * function to add new eve_x_est
     */
    function add_eve_x_est($params)
    {
        $this->db->insert('eve_x_est',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update eve_x_est
     */
    function update_eve_x_est($est_codigo,$params)
    {
        $this->db->where('est_codigo',$est_codigo);
        $response = $this->db->update('eve_x_est',$params);
        if($response)
        {
            return "eve_x_est updated successfully";
        }
        else
        {
            return "Error occuring while updating eve_x_est";
        }
    }

    /*
     * function to delete eve_x_est
     */
    function delete_eve_x_est($est_codigo)
    {
        $response = $this->db->delete('eve_x_est',array('est_codigo'=>$est_codigo));
        if($response)
        {
            return "eve_x_est deleted successfully";
        }
        else
        {
            return "Error occuring while deleting eve_x_est";
        }
    }
}
?>