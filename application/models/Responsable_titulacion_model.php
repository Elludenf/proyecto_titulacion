<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Responsable_titulacion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get responsable_titulacion by res_codigo
     */
    function get_responsable_titulacion($res_codigo)
    {
        return $this->db->get_where('responsables_titulacion',array('res_codigo'=>$res_codigo))->row_array();
    }
    
    /*
     * Get all responsables_titulacion
     */
    function get_all_responsables_titulacion()
    {
        return $this->db->get('responsables_titulacion')->result_array();
    }
    
    /*
     * function to add new responsable_titulacion
     */
    function add_responsable_titulacion($params)
    {
        $this->db->insert('responsables_titulacion',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update responsable_titulacion
     */
    function update_responsable_titulacion($res_codigo,$params)
    {
        $this->db->where('res_codigo',$res_codigo);
        $response = $this->db->update('responsables_titulacion',$params);
        if($response)
        {
            return "responsable_titulacion updated successfully";
        }
        else
        {
            return "Error occuring while updating responsable_titulacion";
        }
    }
    
    /*
     * function to delete responsable_titulacion
     */
    function delete_responsable_titulacion($res_codigo)
    {
        $response = $this->db->delete('responsables_titulacion',array('res_codigo'=>$res_codigo));
        if($response)
        {
            return "responsable_titulacion deleted successfully";
        }
        else
        {
            return "Error occuring while deleting responsable_titulacion";
        }
    }
}
