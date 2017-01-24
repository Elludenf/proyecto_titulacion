<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Trabajo_disertacion extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Trabajo_disertacion_model');
    } 

    /*
     * Listing of trabajos_disertacion
     */
    function index()
    {
        $data['trabajos_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajos_disertacion();

        $this->load->view('trabajos_disertacion/index',$data);
    }

    /*
     * Adding a new trabajo_disertacion
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('dis_fechainicio','Dis Fechainicio','required');
		$this->form_validation->set_rules('dis_fechapresentacionplan','Dis Fechapresentacionplan','required');
		$this->form_validation->set_rules('dis_fechaaprobacion','Dis Fechaaprobacion','required');
		$this->form_validation->set_rules('dis_titulo','Dis Titulo','required|max_length[1024]');
		$this->form_validation->set_rules('dis_estado','Dis Estado','required');
		
		if($this->form_validation->run())     
        {
            $this->db->select_max('dis_codigo');
            $result= $this->db->get('trabajo_disertacion')->row_array();
            $params = array(
                'dis_codigo' =>$result['dis_codigo']+1,
				'dis_fechainicio' => $this->input->post('dis_fechainicio'),
				'dis_fechapresentacionplan' => $this->input->post('dis_fechapresentacionplan'),
				'dis_fechaaprobacion' => $this->input->post('dis_fechaaprobacion'),
				'dis_titulo' => $this->input->post('dis_titulo'),
				'dis_estado' => $this->input->post('dis_estado'),
				'dis_fechafin' => $this->input->post('dis_fechafin'),
				'dis_defensa' => $this->input->post('dis_defensa'),
            );
            
            $trabajo_disertacion_id = $this->Trabajo_disertacion_model->add_trabajo_disertacion($params);
            redirect('trabajo_disertacion/index');
        }
        else
        {
            $this->load->view('trabajos_disertacion/add');
        }
    }  

    /*
     * Editing a trabajo_disertacion
     */
    function edit($dis_codigo)
    {   
        // check if the trabajo_disertacion exists before trying to edit it
        $trabajo_disertacion = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);
        
        if(isset($trabajo_disertacion['dis_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('dis_fechainicio','Dis Fechainicio','required');
			$this->form_validation->set_rules('dis_fechapresentacionplan','Dis Fechapresentacionplan','required');
			$this->form_validation->set_rules('dis_fechaaprobacion','Dis Fechaaprobacion','required');
			$this->form_validation->set_rules('dis_titulo','Dis Titulo','required|max_length[1024]');
			$this->form_validation->set_rules('dis_estado','Dis Estado','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'dis_fechainicio' => $this->input->post('dis_fechainicio'),
					'dis_fechapresentacionplan' => $this->input->post('dis_fechapresentacionplan'),
					'dis_fechaaprobacion' => $this->input->post('dis_fechaaprobacion'),
					'dis_titulo' => $this->input->post('dis_titulo'),
					'dis_estado' => $this->input->post('dis_estado'),
					'dis_fechafin' => $this->input->post('dis_fechafin'),
					'dis_defensa' => $this->input->post('dis_defensa'),
                );

                $this->Trabajo_disertacion_model->update_trabajo_disertacion($dis_codigo,$params);            
                redirect('trabajo_disertacion/index');
            }
            else
            {   
                $data['trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);
    
                $this->load->view('trabajos_disertacion/edit',$data);
            }
        }
        else
            show_error('The trabajo_disertacion you are trying to edit does not exist.');
    } 

    /*
     * Deleting trabajo_disertacion
     */
    function remove($dis_codigo)
    {
        $trabajo_disertacion = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);

        // check if the trabajo_disertacion exists before trying to delete it
        if(isset($trabajo_disertacion['dis_codigo']))
        {
            $this->Trabajo_disertacion_model->delete_trabajo_disertacion($dis_codigo);
            redirect('trabajo_disertacion/index');
        }
        else
            show_error('The trabajo_disertacion you are trying to delete does not exist.');
    }
    
}