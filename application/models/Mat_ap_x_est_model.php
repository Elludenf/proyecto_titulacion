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
    private $table = "mat_ap_x_est";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }

    function getMatApXEstBusqueda($param, $limit = 5) {

        // $offset = $this->uri->segment(3);
        // $this->db->limit($limit, $offset);

        $this->db->select('*','mat_nombre',
            'estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2');
        $this->db->from('mat_ap_x_est','estudiante','materias');
        $this->db->join('materias','materias.mat_codigo=mat_ap_x_est.mat_codigo');
        $this->db->join('estudiante','estudiante.est_codigo=mat_ap_x_est.est_codigo');
        $this->db->like('est_apellido1', $param, 'both');
        $this->db->or_like('mat_nombre', $param, 'both');

        $query=$this->db->get();
        return $query->result_array();

    }

    function countParamSearch($param)
    {
        $this->db->select('*','mat_nombre',
            'estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2');
        $this->db->from('mat_ap_x_est','estudiante','materias');
        $this->db->join('materias','materias.mat_codigo=mat_ap_x_est.mat_codigo');
        $this->db->join('estudiante','estudiante.est_codigo=mat_ap_x_est.est_codigo');
        $this->db->like('est_apellido1', $param, 'both');
        $this->db->or_like('mat_nombre', $param, 'both');
        $query=$this->db->get();

        return $query->num_rows();
    }
    /*
     * Get all mat_ap_x_est
     */
    function get_all_mat_ap_x_est_()
    {
        return $this->db->get('mat_ap_x_est')->result_array();
    }

    function get_all_mat_ap_x_est($limit = 5)
    {
        $offset = $this->uri->segment(3);
        //return $this->db->limit($limit, $offset)
        //    ->get('mat_ap_x_est')->result_array();

        $this->db->limit($limit, $offset);
        $this->db->select('*','mat_nombre',
            'estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2');
        $this->db->from('mat_ap_x_est','estudiante','materias');
        $this->db->join('materias','materias.mat_codigo=mat_ap_x_est.mat_codigo');
        $this->db->join('estudiante','estudiante.est_codigo=mat_ap_x_est.est_codigo');
        $query=$this->db->get();
        return $query->result_array();
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
