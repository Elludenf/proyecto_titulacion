<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Profesor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profesor_model');

    } 

    /*
     * Listing of profesores
     */

    private $limit = 5;
    function index()
    {
        $data['profesores'] = $this->Profesor_model->get_all_profesores();

        /*Empiezo de paginacion*/
        $total_rows = $this->Profesor_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/profesor/index';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('profesores/index', $data);
        $this->load->view('templates/footer');
    }
    function perfil()
    {
        $user=$this->session-> __get('rolname');
        $data['profesor'] = $this->Profesor_model->get_datos($user);
        $data['responsableTitulacion1'] = $this->Profesor_model->getIfResponsableTitulacion1($user);
        $data['responsableTitulacion2'] = $this->Profesor_model->getIfResponsableTitulacion2($user);
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('profesores/perfil', $data);
        $this->load->view('templates/footer');
    }

    function addRevision()
    {
        $user=$this->session-> __get('rolname');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('obs_fecha','Obs Fecha','required');
        $this->form_validation->set_rules('obs_descripcion','Obs Descripcion','required|max_length[1024]');

        if($this->form_validation->run())
        {
            $params = array(
                'dis_codigo' => $this->input->post('dis_codigo'),
                'prof_codigo' => $this->input->post('prof_codigo'),
                'obs_fecha' => $this->input->post('obs_fecha'),
                'obs_descripcion' => $this->input->post('obs_descripcion'),
            );

            $revision_id = $this->Revision_model->add_revision($params);
            redirect('revision/index');
        }
        else
        {

            $this->load->model('Trabajo_disertacion_model');
            $data['all_trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_x_profCodigo($user);

            $this->load->model('Revdir_x_disertacion_model');
            $data['all_revdir'] = $this->Revdir_x_disertacion_model->get_this_revdir_x_disertacion_($user);

            $this->load->model('Profesor_model');
            $c=0;
            $a_prof=[];
            foreach ($data['all_revdir'] as $revdir){
                $prof=$this->Trabajo_disertacion_model->get_profesor($revdir['prof_codigo']);
                $a_prof[$c]=$prof;
                $c++;
            }

            $this->load->model('Profesor_model');
            $data['all_profesores'] =$a_prof;

            $this->load->view('templates/header');
            $this->load->view('profesores/revisarDisertacion', $data);
            $this->load->view('templates/footer');
        }
    }

    function disertacion_estudiantes(){
        $user=$this->session-> __get('rolname');
        $data['profesor'] = $this->Profesor_model->get_datos($user);
        $data['estudiantes']=$this->Profesor_model->get_all_trabajo_disertacion_x_profCodigo($user);

        /*Empiezo de paginacion*/
        $total_rows = $this->Profesor_model->count();
        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'profesor/disertacion_estudiantes';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('profesores/disertacion_estudiantes', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new profesor
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('prof_nombre1','Prof Nombre1','required');
        $this->form_validation->set_rules('prof_apellido1','Prof Apellido1','required');
        $this->form_validation->set_rules('prof_tipoid','Prof Tipoid','required|max_length[3]');
        $this->form_validation->set_rules('prof_id','Prof Id','required');
        $this->form_validation->set_rules('prof_direccion','Prof Direccion','required');
        $this->form_validation->set_rules('prof_celular','Prof Celular','required');
        $this->form_validation->set_rules('prof_mail','Prof Mail','required|valid_email');
        $this->form_validation->set_rules('prof_fechanac','Prof Fechanac','required');
        $this->form_validation->set_rules('prof_sexo','Prof Sexo','required|max_length[1]');
        $this->form_validation->set_rules('prof_mailpuce','Prof Mailpuce','valid_email');


        if($this->form_validation->run())
        {
            //$this->db->select_max('per_codigo');
            //$result= $this->db->get('profesor')->row_array();
            $params = array(
                'prof_nombre1' => $this->input->post('prof_nombre1'),
                'prof_nombre2' => $this->input->post('prof_nombre2'),
                'prof_apellido1' => $this->input->post('prof_apellido1'),
                'prof_apellido2' => $this->input->post('prof_apellido2'),
                'prof_tipoid' => $this->input->post('prof_tipoid'),
                'prof_id' => $this->input->post('prof_id'),
                'prof_direccion' => $this->input->post('prof_direccion'),
                'prof_telefono' => $this->input->post('prof_telefono'),
                'prof_celular' => $this->input->post('prof_celular'),
                'prof_mail' => $this->input->post('prof_mail'),
                'prof_mailpuce' => $this->input->post('prof_mailpuce'),
                'prof_fechanac' => $this->input->post('prof_fechanac'),
                'prof_sexo' => $this->input->post('prof_sexo'),
                'prof_foto' => $this->input->post('prof_foto'),
                'prof_oficina' => $this->input->post('prof_oficina'),
            );
            
            $profesor_id = $this->Profesor_model->add_profesor($params);
            $this->Profesor_model->add_user($params['prof_mailpuce'],$params['prof_id']);
            redirect('profesor/index');
        }
        else
        {

            $this->load->view('templates/header');
            $this->load->view('profesores/add');
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a profesor
     */
    function edit($prof_codigo)
    {   
        // check if the profesor exists before trying to edit it
        $profesor = $this->Profesor_model->get_profesor($prof_codigo);
        
        if(isset($profesor['prof_codigo']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('prof_nombre1','Prof Nombre1','required');
            $this->form_validation->set_rules('prof_apellido1','Prof Apellido1','required');
            $this->form_validation->set_rules('prof_tipoid','Prof Tipoid','required|max_length[3]');
            $this->form_validation->set_rules('prof_id','Prof Id','required');
            $this->form_validation->set_rules('prof_direccion','Prof Direccion','required');
            $this->form_validation->set_rules('prof_celular','Prof Celular','required');
            $this->form_validation->set_rules('prof_mail','Prof Mail','required|valid_email');
            $this->form_validation->set_rules('prof_fechanac','Prof Fechanac','required');
            $this->form_validation->set_rules('prof_sexo','Prof Sexo','required|max_length[1]');
            $this->form_validation->set_rules('prof_mailpuce','Prof Mailpuce','valid_email');
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'prof_nombre1' => $this->input->post('prof_nombre1'),
                    'prof_nombre2' => $this->input->post('prof_nombre2'),
                    'prof_apellido1' => $this->input->post('prof_apellido1'),
                    'prof_apellido2' => $this->input->post('prof_apellido2'),
                    'prof_tipoid' => $this->input->post('prof_tipoid'),
                    'prof_id' => $this->input->post('prof_id'),
                    'prof_direccion' => $this->input->post('prof_direccion'),
                    'prof_telefono' => $this->input->post('prof_telefono'),
                    'prof_celular' => $this->input->post('prof_celular'),
                    'prof_mail' => $this->input->post('prof_mail'),
                    'prof_mailpuce' => $this->input->post('prof_mailpuce'),
                    'prof_fechanac' => $this->input->post('prof_fechanac'),
                    'prof_sexo' => $this->input->post('prof_sexo'),
                    'prof_foto' => $this->input->post('prof_foto'),
                    'prof_oficina' => $this->input->post('prof_oficina'),
                );

                $this->Profesor_model->update_profesor($prof_codigo,$params);
                redirect('profesor/index');
            }
            else
            {   
                $data['profesor'] = $this->Profesor_model->get_profesor($prof_codigo);


                $this->load->view('templates/header');
                $this->load->view('profesores/edit', $data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The profesor you are trying to edit does not exist.');
    } 

    /*
     * Deleting profesor
     */
    function remove($prof_codigo)
    {
        $profesor = $this->Profesor_model->get_profesor($prof_codigo);

        // check if the profesor exists before trying to delete it
        if(isset($profesor['prof_codigo']))
        {
            $this->Profesor_model->delete_profesor($prof_codigo);
            redirect('profesor/index');
        }
        else
            show_error('The profesor you are trying to delete does not exist.');
    }
    
}
