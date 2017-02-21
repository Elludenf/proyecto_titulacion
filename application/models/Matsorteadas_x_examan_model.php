<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Matsorteadas_x_examan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get matsorteadas_x_examan by mat_codigo
     */
    function get_matsorteadas_x_examan($mat_codigo)
    {
        return $this->db->get_where('matsorteadas_x_examen',array('mat_codigo'=>$mat_codigo))->row_array();
    }
    
    /*
     * Get all matsorteadas_x_examen
     */
    function get_all_matsorteadas_x_examen()
    {
        return $this->db->get('matsorteadas_x_examen')->result_array();
    }
    
    /*
     * function to add new matsorteadas_x_examan
     */
    function add_matsorteadas_x_examan($params)
    {
        $this->db->insert('matsorteadas_x_examen',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update matsorteadas_x_examan
     */
    function update_matsorteadas_x_examan($mat_codigo,$params)
    {
        $this->db->where('mat_codigo',$mat_codigo);
        $response = $this->db->update('matsorteadas_x_examen',$params);
        if($response)
        {
            return "matsorteadas_x_examan updated successfully";
        }
        else
        {
            return "Error occuring while updating matsorteadas_x_examan";
        }
    }
    
    /*
     * function to delete matsorteadas_x_examan
     */
    function delete_matsorteadas_x_examan($mat_codigo)
    {
        $response = $this->db->delete('matsorteadas_x_examen',array('mat_codigo'=>$mat_codigo));
        if($response)
        {
            return "matsorteadas_x_examan deleted successfully";
        }
        else
        {
            return "Error occuring while deleting matsorteadas_x_examan";
        }
    }
}