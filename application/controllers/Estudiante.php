<?php

class Estudiante extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estudiante_model');
    } 

    /*
     * Listing of estudiante
     */
    function index()
    {
        $data['estudiante'] = $this->Estudiante_model->get_all_estudiante();

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/index',$data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new estudiante
     */
    function add()
    {   
        $this->load->library('form_validation');


		$this->form_validation->set_rules('per_nombre1','Per Nombre1','required|max_length[50]');
		$this->form_validation->set_rules('per_nombre2','Per Nombre2','max_length[50]');
		$this->form_validation->set_rules('per_apellido1','Per Apellido1','required|max_length[50]');
		$this->form_validation->set_rules('per_apellido2','Per Apellido2','max_length[50]');
		$this->form_validation->set_rules('per_tipoid','Per Tipoid','required|max_length[3]');
		$this->form_validation->set_rules('per_id','Per Id','required|max_length[15]');
		$this->form_validation->set_rules('per_direccion','Per Direccion','required|max_length[1024]');
		$this->form_validation->set_rules('per_telefono','Per Telefono','max_length[10]');
		$this->form_validation->set_rules('per_celular','Per Celular','required|max_length[10]');
		$this->form_validation->set_rules('per_mail','Per Mail','required|max_length[254]|valid_email');
		$this->form_validation->set_rules('per_mailpuce','Per Mailpuce','max_length[254]|valid_email');
		$this->form_validation->set_rules('per_fechanac','Per Fechanac','required');
		$this->form_validation->set_rules('per_sexo','Per Sexo','required|max_length[1]');
		$this->form_validation->set_rules('est_fechaingreso','Est Fechaingreso','required');
		$this->form_validation->set_rules('est_carrera','Est Carrera','required|max_length[1024]');
		
		if($this->form_validation->run())     
        {
            //Agregado
            $this->db->select_max('per_codigo');
            $result= $this->db->get('estudiante')->row_array();
            //echo $result['per_codigo'];
            //
            $params = array(
                //agregado
                'per_codigo' =>$result['per_codigo']+1,
                //
				'per_nombre1' => $this->input->post('per_nombre1'),
				'per_nombre2' => $this->input->post('per_nombre2'),
				'per_apellido1' => $this->input->post('per_apellido1'),
				'per_apellido2' => $this->input->post('per_apellido2'),
				'per_tipoid' => $this->input->post('per_tipoid'),
				'per_id' => $this->input->post('per_id'),
				'per_direccion' => $this->input->post('per_direccion'),
				'per_telefono' => $this->input->post('per_telefono'),
				'per_celular' => $this->input->post('per_celular'),
				'per_mail' => $this->input->post('per_mail'),
				'per_mailpuce' => $this->input->post('per_mailpuce'),
				'per_fechanac' => $this->input->post('per_fechanac'),
				'per_sexo' => $this->input->post('per_sexo'),
				'per_foto' => $this->input->post('per_foto'),
				'est_fechaingreso' => $this->input->post('est_fechaingreso'),
				'est_fechaestimadagraduacion' => $this->input->post('est_fechaestimadagraduacion'),
				'est_fechagraduacion' => $this->input->post('est_fechagraduacion'),
				'est_carrera' => $this->input->post('est_carrera'),
            );
            
            $estudiante_id = $this->Estudiante_model->add_estudiante($params);
            redirect('estudiante/index');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('estudiante/add');
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a estudiante
     */
    function edit($per_codigo)
    {   
        // check if the estudiante exists before trying to edit it
        $estudiante = $this->Estudiante_model->get_estudiante($per_codigo);
        
        if(isset($estudiante['per_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('per_nombre1','Per Nombre1','required|max_length[50]');
			$this->form_validation->set_rules('per_nombre2','Per Nombre2','max_length[50]');
			$this->form_validation->set_rules('per_apellido1','Per Apellido1','required|max_length[50]');
			$this->form_validation->set_rules('per_apellido2','Per Apellido2','max_length[50]');
			$this->form_validation->set_rules('per_tipoid','Per Tipoid','required|max_length[3]');
			$this->form_validation->set_rules('per_id','Per Id','required|max_length[15]');
			$this->form_validation->set_rules('per_direccion','Per Direccion','required|max_length[1024]');
			$this->form_validation->set_rules('per_telefono','Per Telefono','max_length[10]');
			$this->form_validation->set_rules('per_celular','Per Celular','required|max_length[10]');
			$this->form_validation->set_rules('per_mail','Per Mail','required|max_length[254]|valid_email');
			$this->form_validation->set_rules('per_mailpuce','Per Mailpuce','max_length[254]|valid_email');
			$this->form_validation->set_rules('per_fechanac','Per Fechanac','required');
			$this->form_validation->set_rules('per_sexo','Per Sexo','required|max_length[1]');
			$this->form_validation->set_rules('est_fechaingreso','Est Fechaingreso','required');
			$this->form_validation->set_rules('est_carrera','Est Carrera','required|max_length[1024]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'per_nombre1' => $this->input->post('per_nombre1'),
					'per_nombre2' => $this->input->post('per_nombre2'),
					'per_apellido1' => $this->input->post('per_apellido1'),
					'per_apellido2' => $this->input->post('per_apellido2'),
					'per_tipoid' => $this->input->post('per_tipoid'),
					'per_id' => $this->input->post('per_id'),
					'per_direccion' => $this->input->post('per_direccion'),
					'per_telefono' => $this->input->post('per_telefono'),
					'per_celular' => $this->input->post('per_celular'),
					'per_mail' => $this->input->post('per_mail'),
					'per_mailpuce' => $this->input->post('per_mailpuce'),
					'per_fechanac' => $this->input->post('per_fechanac'),
					'per_sexo' => $this->input->post('per_sexo'),
					'per_foto' => $this->input->post('per_foto'),
					'est_fechaingreso' => $this->input->post('est_fechaingreso'),
					'est_fechaestimadagraduacion' => $this->input->post('est_fechaestimadagraduacion'),
					'est_fechagraduacion' => $this->input->post('est_fechagraduacion'),
					'est_carrera' => $this->input->post('est_carrera'),
                );

                $this->Estudiante_model->update_estudiante($per_codigo,$params);            
                redirect('estudiante/index');
            }
            else
            {   
                $data['estudiante'] = $this->Estudiante_model->get_estudiante($per_codigo);
    
                $this->load->view('estudiante/edit',$data);
            }
        }
        else
            show_error('The estudiante you are trying to edit does not exist.');
    } 

    /*
     * Deleting estudiante
     */
    function remove($per_codigo)
    {
        $estudiante = $this->Estudiante_model->get_estudiante($per_codigo);

        // check if the estudiante exists before trying to delete it
        if(isset($estudiante['per_codigo']))
        {
            $this->Estudiante_model->delete_estudiante($per_codigo);
            redirect('estudiante/index');
        }
        else
            show_error('The estudiante you are trying to delete does not exist.');
    }
    
}
