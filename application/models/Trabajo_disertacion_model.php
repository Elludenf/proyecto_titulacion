<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Trabajo_disertacion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getDisertacionBusqueda($param, $limit = 5) {

        // $offset = $this->uri->segment(3);
        // $this->db->limit($limit, $offset);

        $this->db->select('*');
        $this->db->from('trabajo_disertacion');
         $this->db->like('dis_titulo', $param, 'both');


        $query=$this->db->get();
        return $query->result_array();

    }

    function countParamSearch($param)
    {
        $this->db->select('*');
        $this->db->from('trabajo_disertacion');
        $this->db->like('dis_titulo', $param, 'both');


        $query=$this->db->get();

        return $query->num_rows();
    }
    /*
     * Get trabajo_disertacion by dis_codigo
     */
    function get_trabajo_disertacion($dis_codigo)
    {
        return $this->db->get_where('trabajo_disertacion',array('dis_codigo'=>$dis_codigo))->row_array();
    }
    private $table = "trabajo_disertacion";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }
    /*
     * Get all trabajo_disertacion
     */
    function get_all_trabajo_disertacion_()
    {
        return $this->db->get('trabajo_disertacion')->result_array();
    }

    function get_all_trabajo_disertacion_x_profCodigo($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.trabajo_disertacion WHERE titulacion.trabajo_disertacion.dis_Codigo IN
(SELECT titulacion.revdir_x_disertacion.dis_Codigo FROM  titulacion.revdir_x_disertacion WHERE titulacion.revdir_x_disertacion.prof_Codigo IN
(SELECT titulacion.profesor.prof_Codigo FROM titulacion.profesor WHERE 
titulacion.profesor.prof_MailPuce =\''.$correo.'\'))')->result_array();
    }

    function get_all_trabajo_disertacion($limit = 5)
    {
        $offset = $this->uri->segment(3);
        return $this->db->limit($limit, $offset)
            ->get('trabajo_disertacion')->result_array();
    }

    /*
     * function to add new trabajo_disertacion
     */
    function add_trabajo_disertacion($params)
    {
        $this->db->insert('trabajo_disertacion',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update trabajo_disertacion
     */
    function update_trabajo_disertacion($dis_codigo,$params)
    {
        $this->db->where('dis_codigo',$dis_codigo);
        $response = $this->db->update('trabajo_disertacion',$params);
        if($response)
        {
            return "trabajo_disertacion updated successfully";
        }
        else
        {
            return "Error occuring while updating trabajo_disertacion";
        }
    }

    /*
     * function to delete trabajo_disertacion
     */
    function delete_trabajo_disertacion($dis_codigo)
    {
        $response = $this->db->delete('trabajo_disertacion',array('dis_codigo'=>$dis_codigo));
        if($response)
        {
            return "trabajo_disertacion deleted successfully";
        }
        else
        {
            return "Error occuring while deleting trabajo_disertacion";
        }
    }
}
