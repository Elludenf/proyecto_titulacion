<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Carrera extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carrera_model');
    } 

    /*
     * Listing of carreras
     */
    function index()
    {
        $data['carreras'] = $this->Carrera_model->get_all_carreras();

        $this->load->view('carreras/index',$data);
    }

    /*
     * Adding a new carrera
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('esc_codigo','Esc Codigo','required|integer');
		$this->form_validation->set_rules('carr_descripcion','Carr Descripcion','required|max_length[50]');
		
		if($this->form_validation->run())     
        {
            $this->db->select_max('carr_codigo');
            $result= $this->db->get('carreras')->row_array();
            $params = array(
                'carr_codigo' =>$result['carr_codigo']+1,
				'esc_codigo' => $this->input->post('esc_codigo'),
				'carr_descripcion' => $this->input->post('carr_descripcion'),
            );
            
            $carrera_id = $this->Carrera_model->add_carrera($params);
            redirect('carrera/index');
        }
        else
        {

			$this->load->model('Escuela_model');
			$data['all_escuelas'] = $this->Escuela_model->get_all_escuelas();
                
            $this->load->view('carreras/add',$data);
        }
    }  

    /*
     * Editing a carrera
     */
    function edit($carr_codigo)
    {   
        // check if the carrera exists before trying to edit it
        $carrera = $this->Carrera_model->get_carrera($carr_codigo);
        
        if(isset($carrera['carr_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('esc_codigo','Esc Codigo','required|integer');
			$this->form_validation->set_rules('carr_descripcion','Carr Descripcion','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'esc_codigo' => $this->input->post('esc_codigo'),
					'carr_descripcion' => $this->input->post('carr_descripcion'),
                );

                $this->Carrera_model->update_carrera($carr_codigo,$params);            
                redirect('carrera/index');
            }
            else
            {   
                $data['carrera'] = $this->Carrera_model->get_carrera($carr_codigo);
    
				$this->load->model('Escuela_model');
				$data['all_escuelas'] = $this->Escuela_model->get_all_escuelas();

                $this->load->view('carreras/edit',$data);
            }
        }
        else
            show_error('The carrera you are trying to edit does not exist.');
    } 

    /*
     * Deleting carrera
     */
    function remove($carr_codigo)
    {
        $carrera = $this->Carrera_model->get_carrera($carr_codigo);

        // check if the carrera exists before trying to delete it
        if(isset($carrera['carr_codigo']))
        {
            $this->Carrera_model->delete_carrera($carr_codigo);
            redirect('carrera/index');
        }
        else
            show_error('The carrera you are trying to delete does not exist.');
    }
    
}
