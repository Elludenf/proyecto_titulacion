<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Estudiante_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get estudiante by per_codigo
     */
    function get_estudiante($est_codigo)
    {
        return $this->db->get_where('estudiante',array('est_codigo'=>$est_codigo))->row_array();
    }

    function get_datos($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('select * from titulacion.estudiante where est_mailpuce=\''.$correo.'\'')->row_array();
    }
    function getDatosDisertacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))')->row_array();
    }

    function getEstadoDisertacionPresentacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT \'class="active"\' as disEstado FROM 
(SELECT dis_FechaPresentacionPlan FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) AS FOO
WHERE FOO IS NOT NULL')->row_array();
        
        
    }

    function getEstadoAprobacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT \'class="active"\' as disEstado FROM 
(SELECT dis_FechaAprobacion FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) AS FOO
WHERE FOO IS NOT NULL')->row_array();


    }

    function getEstadoFinalizacion($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT \'class="active"\' as disEstado FROM 
(SELECT dis_FechaFin FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) AS FOO
WHERE FOO IS NOT NULL')->row_array();


    }

    function getEstadoDefensa($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT \'class="active"\' as disEstado FROM 
(SELECT dis_FechaFin FROM TITULACION.trabajo_disertacion where TITULACION.trabajo_disertacion.dis_codigo in
(SELECT titulacion.elabora.dis_codigo FROM titulacion.elabora WHERE
titulacion.elabora.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\'))) AS FOO
WHERE FOO IS NOT NULL')->row_array();


    }
    function get_carrera($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('select carr_descripcion,esc_descripcion,facu_descripcion from titulacion.carreras join titulacion.estudiante on titulacion.estudiante.carr_codigo=titulacion.carreras.carr_codigo join titulacion.escuelas on titulacion.escuelas.esc_codigo=titulacion.carreras.esc_codigo join titulacion.facultades on titulacion.facultades.facu_codigo=titulacion.escuelas.facu_codigo where est_mailpuce=\''.$correo.'\'
')->row_array();
    }

    function set_permiso($user)
    {

        $this->db->query('GRANT SELECT ON titulacion.estudiante TO '.$user.'');
    }



    function getEstudianteBusqueda($param) {


        $result = $this->db->like('est_id', $param)
            ->or_like('est_apellido1', $param)
            ->or_like('est_apellido2', $param)
            ->get('estudiante');

        return $result->result_array();
    }


    /*
     * Get all estudiante graduate
     */
    function get_estudiantes_graduados($limit = 5)
    {
        $date2 = date('Y-m-d');
        $offset = $this->uri->segment(3);
        return $this->db->limit($limit, $offset)->get_where('estudiante',array('est_fechagraduacion <'=>$date2))->result_array();


    }



    /*
  Get all estudiante raduados reportes
*/

    function get_graduados_reportes(){
        $date2 = date('Y-m-d');
        return $this->db->get_where('estudiante',array('est_fechagraduacion <'=>$date2))->result_array();

    }

    /*
      Get all estudiante disertacion
*/

    function get_estudiantes_disertacion($limit = 5)
    {
        $offset = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->join('elabora','elabora.est_codigo=estudiante.est_codigo');
        $query=$this->db->limit($limit, $offset)->get();
        return $query->result_array();

    }


    /*
    Get all estudiante disertacion reportes
*/

    function get_disertacion_reportes()
    {
        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->join('elabora','elabora.est_codigo=estudiante.est_codigo');
        $query=$this->db->get();
        return $query->result_array();

    }

    /*
  Get all estudiante titulacion
*/

    function get_estudiantes_titulacion($limit = 5){

        $offset = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->join('examen_complexivo','examen_complexivo.est_codigo=estudiante.est_codigo');
        $query=$this->db->limit($limit, $offset)->get();
        return $query->result_array();

    }

    /*
     Get all estudiante titulacion reportes
   */

    function get_titulacion_reportes(){

        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->join('examen_complexivo','examen_complexivo.est_codigo=estudiante.est_codigo');
        $query=$this->db->get();
        return $query->result_array();

    }



    /*Get total number of rows (used in pagination)*/
    private $table = "estudiante";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }

    function countParamSearch($param)
    {
        $result = $this->db->like('est_id', $param)
            ->or_like('est_apellido1', $param)
            ->or_like('est_apellido2', $param)
            ->get('estudiante');

        return $result->num_rows();
    }


    /*
     * Get all estudiante
     */
    function get_all_estudiantes($limit = 5)
    {
        $offset = $this->uri->segment(3);
        //return $this->db->limit($limit, $offset)
            //
        $this->db->limit($limit, $offset);
        $this->db->select('*','carr_descripcion');
        $this->db->from('estudiante','carreras');
        $this->db->join('carreras','carreras.carr_codigo=estudiante.carr_codigo');
        $this->db->order_by('est_codigo','asc');
        $query=$this->db->get();
        return $query->result_array();
                //
            //->get('estudiante')->result_array();
    }

    /*
     * Get all estudiante
     */

    function get_all_estudiantes_()
    {
        return $this->db->get('estudiante')->result_array();
    }

    function get_todos_reportes()
    {
        return $this->db->get('estudiante')->result_array();

    }

    /*
     * function to add new estudiante
     */
    function get_all_estudiantes_no_elabora_ni_toma()
    {

        $this->db->select('*');
        $this->db->from('estudiante t1');
        $this->db->where("NOT EXISTS (
                          SELECT est_codigo FROM titulacion.examen_complexivo t2 WHERE t1.est_codigo = t2.est_codigo)
                          AND 
                        NOT EXISTS (
                            SELECT est_codigo FROM titulacion.elabora t2 WHERE t1.est_codigo = t2.est_codigo
                        )");
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_all()
    {

        return $this->db->get('estudiante')->result_array();
    }


    function add_estudiante($params)
    {
        $this->db->insert('estudiante',$params);
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


        //$pass="'".$pass."'";
        $query='CREATE ROLE '.$user.' LOGIN ENCRYPTED PASSWORD '.$this->db->escape($pass).'; GRANT "R_ESTUDIANTE" TO '.$user.'; GRANT "R_VISTA" TO '.$user.'';
        //$this->db->query('CREATE ROLE '.$user.' LOGIN ENCRYPTED PASSWORD '.$this->db->escape($pass).'; GRANT "R_ESTUDIANTE" TO '.$user.'');
        $this->db->query($query);

    }

    /*
     * function to update estudiante
     */
    function update_estudiante($est_codigo,$params)
    {
        $this->db->where('est_codigo',$est_codigo);
        $response = $this->db->update('estudiante',$params);
        if($response)
        {
            return "estudiante updated successfully";
        }
        else
        {
            return "Error occuring while updating estudiante";
        }
    }

    /*
     * function to delete estudiante
     */
    function delete_estudiante($est_codigo)
    {
        $response = $this->db->delete('estudiante',array('est_codigo'=>$est_codigo));
        if($response)
        {
            return "estudiante deleted successfully";
        }
        else
        {
            return "Error occuring while deleting estudiante";
        }
    }
}
