<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Elabora_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get elabora by est_codigo
     */
    function get_elabora()
    {
        $est_codigo=$this->uri->segment(3);
        $dis_codigo=$this->uri->segment(4);
        return $this->db->get_where('elabora',array('est_codigo'=>$est_codigo,'dis_codigo'=>$dis_codigo))->row_array();
    }

    function getElaboraBusqueda($param, $limit = 5) {

        // $offset = $this->uri->segment(3);
        // $this->db->limit($limit, $offset);

        $this->db->select('*','estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('elabora', 'estudiante', 'trabajo_disertacion');
        $this->db->join('estudiante','estudiante.est_codigo = elabora.est_codigo');
        $this->db->join('trabajo_disertacion','trabajo_disertacion.dis_codigo = elabora.dis_codigo');
        $this->db->like('estudiante.est_apellido1', $param, 'both');
        $this->db->or_like('trabajo_disertacion.dis_titulo', $param, 'both');
               $query=$this->db->get();
        return $query->result_array();

    }

    function countParamSearch($param)
    {

        $this->db->select('*','estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('elabora', 'estudiante', 'trabajo_disertacion');
        $this->db->join('estudiante','estudiante.est_codigo = elabora.est_codigo');
        $this->db->join('trabajo_disertacion','trabajo_disertacion.dis_codigo = elabora.dis_codigo');
        $this->db->like('estudiante.est_apellido1', $param, 'both');
        $this->db->or_like('trabajo_disertacion.dis_titulo', $param, 'both');
        $query=$this->db->get();

        return $query->num_rows();
    }
    /*
     * Get all elabora
     */

    function get_all_elabora_()
    {
        return $this->db->get('elabora')->result_array();
    }


    function get_all_elabora($limit = 5)
    {
        $offset = $this->uri->segment(3);
        $this->db->limit($limit, $offset);
        //return $this->db->limit($limit, $offset)
        //    ->get('elabora')->result_array();
        $this->db->select('*','estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('elabora', 'estudiante', 'trabajo_disertacion');
        $this->db->join('estudiante','estudiante.est_codigo = elabora.est_codigo');
        $this->db->join('trabajo_disertacion','trabajo_disertacion.dis_codigo = elabora.dis_codigo');
        $query=$this->db->get();
        return $query->result_array();
    }

    private $table = "elabora";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }
    /*
     * function to add new elabora
     */
    function add_elabora($params)
    {
        $this->db->insert('elabora',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update elabora
     */
    function update_elabora($est_codigo,$dis_codigo,$params)
    {
        $this->db->where('est_codigo',$est_codigo,'dis_codigo',$dis_codigo);
        $response = $this->db->update('elabora',$params);
        if($response)
        {
            return "elabora updated successfully";
        }
        else
        {
            return "Error occuring while updating elabora";
        }
    }
    
    /*
     * function to delete elabora
     */
    function delete_elabora($est_codigo,$dis_codigo)
    {
        $response = $this->db->delete('elabora',array('est_codigo'=>$est_codigo,'dis_codigo'=>$dis_codigo));
        if($response)
        {
            return "elabora deleted successfully";
        }
        else
        {
            return "Error occuring while deleting elabora";
        }
    }
}
