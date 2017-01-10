<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Periodos_academicos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Periodos_academicos_model');
    } 

    /*
     * Listing of periodos_academicos
     */
    function index()
    {
        $data['periodos_academicos'] = $this->Periodos_academicos_model->get_all_periodos_academicos();

        $this->load->view('periodos_academicos/index',$data);
    }

    /*
     * Adding a new periodos_academicos
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('pac_descripcion','Pac Descripcion','required|max_length[30]');
		$this->form_validation->set_rules('pac_fechainicio','Pac Fechainicio','required');
		$this->form_validation->set_rules('pac_fechafinal','Pac Fechafinal','required');
		$this->form_validation->set_rules('pac_perido','Pac Perido','integer');
		
		if($this->form_validation->run())     
        {
            $this->db->select_max('pac_codigo');
            $result= $this->db->get('periodos_academicos')->row_array();
            $params = array(
                'pac_codigo' =>$result['pac_codigo']+1,
				'pac_descripcion' => $this->input->post('pac_descripcion'),
				'pac_fechainicio' => $this->input->post('pac_fechainicio'),
				'pac_fechafinal' => $this->input->post('pac_fechafinal'),
				'pac_perido' => $this->input->post('pac_perido'),
            );
            
            $periodos_academicos_id = $this->Periodos_academicos_model->add_periodos_academicos($params);
            redirect('periodos_academicos/index');
        }
        else
        {
            $this->load->view('periodos_academicos/add');
        }
    }  

    /*
     * Editing a periodos_academicos
     */
    function edit($pac_codigo)
    {   
        // check if the periodos_academicos exists before trying to edit it
        $periodos_academicos = $this->Periodos_academicos_model->get_periodos_academicos($pac_codigo);
        
        if(isset($periodos_academicos['pac_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('pac_descripcion','Pac Descripcion','required|max_length[30]');
			$this->form_validation->set_rules('pac_fechainicio','Pac Fechainicio','required');
			$this->form_validation->set_rules('pac_fechafinal','Pac Fechafinal','required');
			$this->form_validation->set_rules('pac_perido','Pac Perido','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'pac_descripcion' => $this->input->post('pac_descripcion'),
					'pac_fechainicio' => $this->input->post('pac_fechainicio'),
					'pac_fechafinal' => $this->input->post('pac_fechafinal'),
					'pac_perido' => $this->input->post('pac_perido'),
                );

                $this->Periodos_academicos_model->update_periodos_academicos($pac_codigo,$params);            
                redirect('periodos_academicos/index');
            }
            else
            {   
                $data['periodos_academicos'] = $this->Periodos_academicos_model->get_periodos_academicos($pac_codigo);
    
                $this->load->view('periodos_academicos/edit',$data);
            }
        }
        else
            show_error('The periodos_academicos you are trying to edit does not exist.');
    } 

    /*
     * Deleting periodos_academicos
     */
    function remove($pac_codigo)
    {
        $periodos_academicos = $this->Periodos_academicos_model->get_periodos_academicos($pac_codigo);

        // check if the periodos_academicos exists before trying to delete it
        if(isset($periodos_academicos['pac_codigo']))
        {
            $this->Periodos_academicos_model->delete_periodos_academicos($pac_codigo);
            redirect('periodos_academicos/index');
        }
        else
            show_error('The periodos_academicos you are trying to delete does not exist.');
    }
    
}
