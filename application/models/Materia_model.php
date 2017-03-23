<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Materia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get materia by mat_codigo
     */
    function get_materia($mat_codigo)
    {
        return $this->db->get_where('materias',array('mat_codigo'=>$mat_codigo))->row_array();
    }
    private $table = "materias";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }
    function getMateriaBusqueda($param, $limit = 5) {

        // $offset = $this->uri->segment(3);
        // $this->db->limit($limit, $offset);

        $this->db->select('*');
        $this->db->from('materias');


        $this->db->like('mat_nombre', $param, 'both');

        $query=$this->db->get();
        return $query->result_array();

    }

    function countParamSearch($param)
    {
        $this->db->select('*');
        $this->db->from('materias');

        $this->db->like('mat_nombre', $param, 'both');

        $query=$this->db->get();

        return $query->num_rows();
    }
    /*
     * Get all materias
     */
    function get_all_materias_()
    {
        return $this->db->get('materias')->result_array();
    }

    function get_all_materias($limit = 5)
    {
        $offset = $this->uri->segment(3);
        return $this->db->limit($limit, $offset)
            ->get('materias')->result_array();
    }
    
    /*
     * function to add new materia
     */
    function add_materia($params)
    {
        $this->db->insert('materias',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update materia
     */
    function update_materia($mat_codigo,$params)
    {
        $this->db->where('mat_codigo',$mat_codigo);
        $response = $this->db->update('materias',$params);
        if($response)
        {
            return "materia updated successfully";
        }
        else
        {
            return "Error occuring while updating materia";
        }
    }
    
    /*
     * function to delete materia
     */
    function delete_materia($mat_codigo)
    {
        $response = $this->db->delete('materias',array('mat_codigo'=>$mat_codigo));
        if($response)
        {
            return "materia deleted successfully";
        }
        else
        {
            return "Error occuring while deleting materia";
        }
    }
}
