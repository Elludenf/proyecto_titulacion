<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Escuela extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Escuela_model');
    } 

    /*
     * Listing of escuelas
     */
    private $limit = 5;
    function index()
    {
        $data['escuelas'] = $this->Escuela_model->get_all_escuelas();

        /*Empiezo de paginacion*/
        $total_rows = $this->Escuela_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/escuela/index';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('escuelas/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new escuela
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('facu_codigo','Facu Codigo','required|integer');
		$this->form_validation->set_rules('esc_descripcion','Esc Descripcion','required|max_length[50]');
		
		if($this->form_validation->run())     
        {
            $this->db->select_max('esc_codigo');
            $result= $this->db->get('escuelas')->row_array();
            $params = array(
                'esc_codigo' =>$result['esc_codigo']+1,
				'facu_codigo' => $this->input->post('facu_codigo'),
				'esc_descripcion' => $this->input->post('esc_descripcion'),
            );
            
            $escuela_id = $this->Escuela_model->add_escuela($params);
            redirect('escuela/index');
        }
        else
        {

			$this->load->model('Facultades_model');
			$data['all_facultades'] = $this->Facultades_model->get_all_facultades();

            $this->load->view('templates/header');
            $this->load->view('escuelas/add', $data);
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a escuela
     */
    function edit($esc_codigo)
    {   
        // check if the escuela exists before trying to edit it
        $escuela = $this->Escuela_model->get_escuela($esc_codigo);
        
        if(isset($escuela['esc_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('facu_codigo','Facu Codigo','required|integer');
			$this->form_validation->set_rules('esc_descripcion','Esc Descripcion','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'facu_codigo' => $this->input->post('facu_codigo'),
					'esc_descripcion' => $this->input->post('esc_descripcion'),
                );

                $this->Escuela_model->update_escuela($esc_codigo,$params);            
                redirect('escuela/index');
            }
            else
            {   
                $data['escuela'] = $this->Escuela_model->get_escuela($esc_codigo);
    
				$this->load->model('Facultades_model');
				$data['all_facultades'] = $this->Facultades_model->get_all_facultades();

                $this->load->view('templates/header');
                $this->load->view('escuelas/edit',$data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The escuela you are trying to edit does not exist.');
    } 

    /*
     * Deleting escuela
     */
    function remove($esc_codigo)
    {
        $escuela = $this->Escuela_model->get_escuela($esc_codigo);

        // check if the escuela exists before trying to delete it
        if(isset($escuela['esc_codigo']))
        {
            $this->Escuela_model->delete_escuela($esc_codigo);
            redirect('escuela/index');
        }
        else
            show_error('The escuela you are trying to delete does not exist.');
    }
    
}
