<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Examen_complexivo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getExamenBusqueda($param, $limit = 5) {

        // $offset = $this->uri->segment(3);
        // $this->db->limit($limit, $offset);

        $this->db->select('*','estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('examen_complexivo', 'estudiante');
        $this->db->join('estudiante','estudiante.est_codigo = examen_complexivo.est_codigo');
        $this->db->like('estudiante.est_apellido1', $param, 'both');

        $this->db->or_like('exa_estado', $param, 'both');
       // $this->db->or_where('exa_fechainicio', $param, 'both');
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
        $this->db->from('examen_complexivo', 'estudiante');
        $this->db->join('estudiante','estudiante.est_codigo = examen_complexivo.est_codigo');
        $this->db->like('estudiante.est_apellido1', $param, 'both');
    //    $this->db->or_like('exa_fechainicio', $param, 'both');
        $this->db->or_like('exa_estado', $param, 'both');
        $query=$this->db->get();

        return $query->num_rows();
    }
    /*
     * Get examen_complexivo by exa_codigo
     */
    function get_examen_complexivo($exa_codigo)
    {
        return $this->db->get_where('examen_complexivo',array('exa_codigo'=>$exa_codigo))->row_array();
    }
    private $table = "examen_complexivo";
    function count()
    {
        return $this->db->count_all_results($this->table);
    }
    /*
     * Get all examenes_complexivo
     */
    function getPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1')->row_array();
    }


    function getSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1')->row_array();
    }

    function  getPrimeraMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 1 OFFSET 0')->row_array();
    }

    function  getSegundaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 2 OFFSET 1')->row_array();
    }

    function  getTerceraMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 3 OFFSET 2')->row_array();
    }

    function  getCuartaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 4 OFFSET 3')->row_array();
    }

    function  getQuintaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 5 OFFSET 4')->row_array();
    }

    function  getNombrePrimeraMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 1 OFFSET 0)')->row_array();
    }

    function  getNombreSegundaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 2 OFFSET 1)')->row_array();
    }

    function  getNombreTerceraMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 3 OFFSET 2)')->row_array();
    }

    function  getNombreCuartaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 4 OFFSET 3)')->row_array();
    }

    function  getNombreQuintaMateriaSorteadasPrimerIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
LIMIT 1)LIMIT 5 OFFSET 4)')->row_array();
    }

    function  getPrimeraMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 1 OFFSET 0')->row_array();
    }

    function  getSegundaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 2 OFFSET 1')->row_array();
    }

    function  getTerceraMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 3 OFFSET 2')->row_array();
    }

    function  getCuartaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 4 OFFSET 3')->row_array();
    }

    function  getQuintaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT * FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 5 OFFSET 4')->row_array();
    }

    function  getNombrePrimeraMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 1 OFFSET 0)')->row_array();
    }

    function  getNombreSegundaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 2 OFFSET 1)')->row_array();
    }

    function  getNombreTerceraMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 3 OFFSET 2)')->row_array();
    }

    function  getNombreCuartaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 4 OFFSET 3)')->row_array();
    }

    function  getNombreQuintaMateriaSorteadasSegundoIntento($user)
    {
        $correo=$user.'@puce.edu.ec';
        return $this->db->query('SELECT titulacion.materias.mat_nombre FROM titulacion.materias WHERE titulacion.materias.mat_codigo IN
(SELECT mat_codigo FROM titulacion.matsorteadas_x_examen WHERE  titulacion.matsorteadas_x_examen.exa_codigo IN
(SELECT titulacion.examen_complexivo.exa_codigo FROM titulacion.examen_complexivo WHERE
titulacion.examen_complexivo.est_Codigo IN (SELECT titulacion.estudiante.est_codigo FROM titulacion.estudiante WHERE
titulacion.estudiante.est_MailPuce=\''.$correo.'\')
ORDER BY titulacion.examen_complexivo.exa_fechainicio ASC
OFFSET 1)LIMIT 5 OFFSET 4)')->row_array();
    }

    function get_all_examenes_complexivo_()
    {
        return $this->db->get('examen_complexivo')->result_array();
    }

    function get_all_examenes_complexivo($limit = 5)
    {
        $offset = $this->uri->segment(3);
        //return $this->db->limit($limit, $offset)
        //    ->get('examen_complexivo')->result_array();
        $this->db->limit($limit, $offset);
        $this->db->select('*','estudiante.est_apellido1',
            'estudiante.est_apellido2',
            'estudiante.est_nombre1',
            'estudiante.est_nombre2',
            'trabajo_disertacion.dis_titulo');
        $this->db->from('examen_complexivo', 'estudiante');
        $this->db->join('estudiante','estudiante.est_codigo = examen_complexivo.est_codigo');
        $query=$this->db->get();
        return $query->result_array();
    }
    
    /*
     * function to add new examen_complexivo
     */
    function add_examen_complexivo($params)
    {
        $this->db->insert('examen_complexivo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update examen_complexivo
     */
    function update_examen_complexivo($exa_codigo,$params)
    {
        $this->db->where('exa_codigo',$exa_codigo);
        $response = $this->db->update('examen_complexivo',$params);
        if($response)
        {
            return "examen_complexivo updated successfully";
        }
        else
        {
            return "Error occuring while updating examen_complexivo";
        }
    }
    
    /*
     * function to delete examen_complexivo
     */
    function delete_examen_complexivo($exa_codigo)
    {
        $response = $this->db->delete('examen_complexivo',array('exa_codigo'=>$exa_codigo));
        if($response)
        {
            return "examen_complexivo deleted successfully";
        }
        else
        {
            return "Error occuring while deleting examen_complexivo";
        }
    }
}
