<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Revision_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get revision by obs_codigo
     */
    function get_revision($obs_codigo)
    {
        return $this->db->get_where('revisiones',array('obs_codigo'=>$obs_codigo))->row_array();
    }
    private $table = "revisiones";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }

    /*
     * Get all revisiones
     */

    function get_all_revisiones_()
    {
        return $this->db->get('revisiones')->result_array();
    }

    function get_all_revisiones($limit = 5)
    {
        $offset = $this->uri->segment(3);
        //return $this->db->limit($limit, $offset)
        //    ->get('revisiones')->result_array();
        $this->db->limit($limit, $offset);
        $this->db->select('*',
            'profesor.prof_apellido1',
            'profesor.prof_apellido2',
            'profesor.prof_nombre1',
            'profesor.prof_nombre2',
            'rxd_tipo',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('revisiones','profesor','revdir_x_disertacion','trabajo_disertacion');
        $this->db->join('profesor','profesor.prof_codigo=revisiones.prof_codigo');
        $this->db->join('revdir_x_disertacion','revdir_x_disertacion.prof_codigo=revisiones.prof_codigo');
        $this->db->join('trabajo_disertacion','trabajo_disertacion.dis_codigo=revisiones.dis_codigo');
        $query=$this->db->get();
        return $query->result_array();
    }
    
    /*
     * function to add new revision
     */
    function add_revision($params)
    {
        $this->db->insert('revisiones',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update revision
     */
    function update_revision($obs_codigo,$params)
    {
        $this->db->where('obs_codigo',$obs_codigo);
        $response = $this->db->update('revisiones',$params);
        if($response)
        {
            return "revision updated successfully";
        }
        else
        {
            return "Error occuring while updating revision";
        }
    }
    
    /*
     * function to delete revision
     */
    function delete_revision($obs_codigo)
    {
        $response = $this->db->delete('revisiones',array('obs_codigo'=>$obs_codigo));
        if($response)
        {
            return "revision deleted successfully";
        }
        else
        {
            return "Error occuring while deleting revision";
        }
    }
}
