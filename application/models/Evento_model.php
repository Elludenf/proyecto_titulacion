<?php
/**
 * Created by PhpStorm.
 * User: rober_000
 * Date: 19-Apr-17
 * Time: 4:55 PM
 */

class Evento_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get evento by eve_codigo
     */
    function get_evento($eve_codigo)
    {
        return $this->db->get_where('evento',array('eve_codigo'=>$eve_codigo))->row_array();
    }


    function count()
    {
        return $this->db->count_all_results($this->table);
    }


    /*
     * Get all evento
     */
    function get_all_evento()
    {
        return $this->db->get('evento')->result_array();
    }

    /*
     * function to add new evento
     */
    function add_evento($params)
    {
        $this->db->insert('evento',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update evento
     */
    function update_evento($eve_codigo,$params)
    {
        $this->db->where('eve_codigo',$eve_codigo);
        $response = $this->db->update('evento',$params);
        if($response)
        {
            return "evento updated successfully";
        }
        else
        {
            return "Error occuring while updating evento";
        }
    }

    /*
     * function to delete evento
     */
    function delete_evento($eve_codigo)
    {
        $response = $this->db->delete('evento',array('eve_codigo'=>$eve_codigo));
        if($response)
        {
            return "evento deleted successfully";
        }
        else
        {
            return "Error occuring while deleting evento";
        }
    }
}

?>