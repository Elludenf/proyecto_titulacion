<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Prorroga_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get prorroga by pro_codigo
     */
    function get_prorroga($pro_codigo)
    {
        return $this->db->get_where('prorroga',array('pro_codigo'=>$pro_codigo))->row_array();
    }
    private $table = "prorroga";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }

    /*
     * Get all prorrogas
     */
    function get_all_prorrogas_()
    {
        return $this->db->get('prorroga')->result_array();
    }

    function get_all_prorrogas($limit = 5)
    {
        $offset = $this->uri->segment(3);
        //return $this->db->limit($limit, $offset)
        //    ->get('prorroga')->result_array();
        $this->db->limit($limit, $offset);
        $this->db->select('*','dis_titulo');
        $this->db->from('prorroga','trabajo_disertacion');
        $this->db->join('trabajo_disertacion','trabajo_disertacion.dis_codigo=prorroga.dis_codigo');
        $this->db->order_by('prorroga.dis_codigo','asc');
        $query=$this->db->get();
        return $query->result_array();
    }
    
    /*
     * function to add new prorroga
     */
    function add_prorroga($params)
    {
        $this->db->insert('prorroga',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update prorroga
     */
    function update_prorroga($pro_codigo,$params)
    {
        $this->db->where('pro_codigo',$pro_codigo);
        $response = $this->db->update('prorroga',$params);
        if($response)
        {
            return "prorroga updated successfully";
        }
        else
        {
            return "Error occuring while updating prorroga";
        }
    }
    
    /*
     * function to delete prorroga
     */
    function delete_prorroga($pro_codigo)
    {
        $response = $this->db->delete('prorroga',array('pro_codigo'=>$pro_codigo));
        if($response)
        {
            return "prorroga deleted successfully";
        }
        else
        {
            return "Error occuring while deleting prorroga";
        }
    }
}
