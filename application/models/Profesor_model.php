<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Profesor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get profesor by per_codigo
     */
    function get_profesor($prof_codigo)
    {
        return $this->db->get_where('profesor',array('prof_codigo'=>$prof_codigo))->row_array();
    }
    private $table = "profesor";

    function get_datos($user){
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('select * from titulacion.profesor where prof_mailpuce=\''.$correo.'\'')->row_array();
    }
    function get_estudiantes_disertacion($user){

        $correo=$user.'@puce.edu.ec';
        return $this->db->query('select est_id,est_nombre1,est_nombre2,est_apellido1,est_apellido2,dis_titulo from titulacion.estudiante natural join 
        titulacion.elabora natural join titulacion.trabajo_disertacion natural join titulacion.revdir_x_disertacion 
        natural join titulacion.profesor where prof_mailpuce=\''.$correo.'\'')->result_array();
    }

    function count()
    {
        return $this->db->count_all_results($this->table);
    }

    function getResponsableTitulacion1()
    {
        return $this->db->query('SELECT * FROM titulacion.profesor where titulacion.profesor.prof_codigo in (SELECT titulacion.responsables_titulacion.prof_codigo FROM 
titulacion.responsables_titulacion WHERE titulacion.responsables_titulacion.res_tipo=\'R1\' AND titulacion.responsables_titulacion.res_fechanombramiento=(select max(titulacion.responsables_titulacion.res_fechanombramiento) 
from titulacion.responsables_titulacion WHERE titulacion.responsables_titulacion.res_tipo=\'R1\'))')->row_array();
    }
    function getResponsableTitulacion2()
    {
        return $this->db->query('SELECT * FROM titulacion.profesor where titulacion.profesor.prof_codigo in (SELECT titulacion.responsables_titulacion.prof_codigo FROM 
titulacion.responsables_titulacion WHERE titulacion.responsables_titulacion.res_tipo=\'R2\' AND titulacion.responsables_titulacion.res_fechanombramiento=(select max(titulacion.responsables_titulacion.res_fechanombramiento) 
from titulacion.responsables_titulacion WHERE titulacion.responsables_titulacion.res_tipo=\'R2\'))')->row_array();
    }
    function getDirectorDisertacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM TITULACION.PROFESOR WHERE titulacion.profesor.prof_Codigo in
(SELECT prof_Codigo FROM titulacion.REVDIR_X_DISERTACION WHERE titulacion.REVDIR_X_DISERTACION.dis_Codigo
in(SELECT dis_codigo FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) and titulacion.REVDIR_X_DISERTACION.rxd_tipo = \'DIR\' )')->row_array();
    }

    function getRevisor1Disertacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM TITULACION.PROFESOR WHERE titulacion.profesor.prof_Codigo in
(SELECT prof_Codigo FROM titulacion.REVDIR_X_DISERTACION WHERE titulacion.REVDIR_X_DISERTACION.dis_Codigo
in(SELECT dis_codigo FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) and titulacion.REVDIR_X_DISERTACION.rxd_tipo = \'R_1\' )')->row_array();
    }

    function getRevisor2Disertacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM TITULACION.PROFESOR WHERE titulacion.profesor.prof_Codigo in
(SELECT prof_Codigo FROM titulacion.REVDIR_X_DISERTACION WHERE titulacion.REVDIR_X_DISERTACION.dis_Codigo
in(SELECT dis_codigo FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) and titulacion.REVDIR_X_DISERTACION.rxd_tipo = \'R_2\' )')->row_array();
    }
    /*
     * Get all profesores
     */
    function get_all_profesores_()
    {
        return $this->db->get('profesor')->result_array();
    }

    function get_all_profesores($limit = 5)
    {
        $offset = $this->uri->segment(3);
        return $this->db->limit($limit, $offset)
            ->get('profesor')->result_array();
    }
    
    /*
     * function to add new profesor
     */
    function add_profesor($params)
    {
        $this->db->insert('profesor',$params);
        //return $this->db->insert_id();
    }

    /*
     * function to create user estudiante
     */
    function add_user($user,$pass)
    {
        function before ($simbolo, $inthat)
        {
            return substr($inthat, 0, strpos($inthat, $simbolo));
        };
        $user=before ('@', $user);
        $pass="'".$pass."'";

        $this->db->query('CREATE ROLE '.$user.' LOGIN ENCRYPTED PASSWORD '.$pass.'; GRANT "R_PROFESOR" TO '.$user.'; GRANT "R_VISTA" TO '.$user.'');
        //return $this->db->insert_id();
    }
    
    /*
     * function to update profesor
     */
    function update_profesor($prof_codigo,$params)
    {
        $this->db->where('prof_codigo',$prof_codigo);
        $response = $this->db->update('profesor',$params);
        if($response)
        {
            return "profesor updated successfully";
        }
        else
        {
            return "Error occuring while updating profesor";
        }
    }
    
    /*
     * function to delete profesor
     */
    function delete_profesor($prof_codigo)
    {
        $response = $this->db->delete('profesor',array('prof_codigo'=>$prof_codigo));
        if($response)
        {
            return "profesor deleted successfully";
        }
        else
        {
            return "Error occuring while deleting profesor";
        }
    }
}
