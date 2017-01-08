<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Periodos_academicos2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Periodos_academicos2_model');
    } 

    /*
     * Listing of periodos_academicos2
     */
    function index()
    {
        $data['periodos_academicos2'] = $this->Periodos_academicos2_model->get_all_periodos_academicos2();

        $this->load->view('periodos_academicos2/index',$data);
    }

    /*
     * Adding a new periodos_academicos2
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('pac_descripcion','Pac Descripcion','required');
		$this->form_validation->set_rules('pac_fechainicio','Pac Fechainicio','required');
		$this->form_validation->set_rules('pac_fechafinal','Pac Fechafinal','required');
		$this->form_validation->set_rules('pac_perido','Pac Perido','integer');
		
		if($this->form_validation->run())     
        {
            //Agregado
            $this->db->select_max('pac_codigo');
            $result= $this->db->get('periodos_academicos2')->row_array();
            //echo $result['pac_codigo'];
            //
            $params = array(
                //agregado
                'pac_codigo' =>$result['pac_codigo']+1,
                //
				'pac_descripcion' => $this->input->post('pac_descripcion'),
				'pac_fechainicio' => $this->input->post('pac_fechainicio'),
				'pac_fechafinal' => $this->input->post('pac_fechafinal'),
				'pac_perido' => $this->input->post('pac_perido'),
            );
            
            $periodos_academicos2_id = $this->Periodos_academicos2_model->add_periodos_academicos2($params);
            redirect('periodos_academicos2/index');
        }
        else
        {
            $this->load->view('periodos_academicos2/add');
        }
    }  

    /*
     * Editing a periodos_academicos2
     */
    function edit($pac_codigo)
    {   
        // check if the periodos_academicos2 exists before trying to edit it
        $periodos_academicos2 = $this->Periodos_academicos2_model->get_periodos_academicos2($pac_codigo);
        
        if(isset($periodos_academicos2['pac_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('pac_descripcion','Pac Descripcion','required');
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

                $this->Periodos_academicos2_model->update_periodos_academicos2($pac_codigo,$params);            
                redirect('periodos_academicos2/index');
            }
            else
            {   
                $data['periodos_academicos2'] = $this->Periodos_academicos2_model->get_periodos_academicos2($pac_codigo);
    
                $this->load->view('periodos_academicos2/edit',$data);
            }
        }
        else
            show_error('The periodos_academicos2 you are trying to edit does not exist.');
    } 

    /*
     * Deleting periodos_academicos2
     */
    function remove($pac_codigo)
    {
        $periodos_academicos2 = $this->Periodos_academicos2_model->get_periodos_academicos2($pac_codigo);

        // check if the periodos_academicos2 exists before trying to delete it
        if(isset($periodos_academicos2['pac_codigo']))
        {
            $this->Periodos_academicos2_model->delete_periodos_academicos2($pac_codigo);
            redirect('periodos_academicos2/index');
        }
        else
            show_error('The periodos_academicos2 you are trying to delete does not exist.');
    }
    
}
