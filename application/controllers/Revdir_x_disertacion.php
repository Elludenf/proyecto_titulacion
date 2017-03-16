<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Revdir_x_disertacion extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Revdir_x_disertacion_model');
    } 

    /*
     * Listing of revdir_x_disertacion
     */

    private $limit = 5;
    function index()
    {
        $data['revdir_x_disertacion'] = $this->Revdir_x_disertacion_model->get_all_revdir_x_disertacion();

        /*Empiezo de paginacion*/
        $total_rows = $this->Revdir_x_disertacion_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/revdir_x_disertacion/index';
        //CSS
        $config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['first_link'] = '&lt;&lt;';
        $config['last_link'] = '&gt;&gt;';
        //Fin CSS
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('revdir_x_disertacion/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new revdir_x_disertacion
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('rxd_tipo','Rxd Tipo','required|max_length[3]');
		$this->form_validation->set_rules('rxd_fechanombramiento','Rxd Fechanombramiento','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
                'prof_codigo'=>$this->input->post('prof_codigo'),
                'dis_codigo'=>$this->input->post('dis_codigo'),
				'rxd_tipo' => $this->input->post('rxd_tipo'),
				'rxd_fechanombramiento' => $this->input->post('rxd_fechanombramiento'),
            );
            
            $revdir_x_disertacion_id = $this->Revdir_x_disertacion_model->add_revdir_x_disertacion($params);
            redirect('revdir_x_disertacion/index');
        }
        else
        {
            $this->load->model('Trabajo_disertacion_model');
            $data['all_trabajos'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_();
            $this->load->model('Profesor_model');
            $data['all_profesores'] = $this->Profesor_model->get_all_profesores_();

            $this->load->view('templates/header');
            $this->load->view('revdir_x_disertacion/add', $data);
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a revdir_x_disertacion
     */
    function edit($dis_codigo,$prof_codigo)
    {   
        // check if the revdir_x_disertacion exists before trying to edit it
        $revdir_x_disertacion = $this->Revdir_x_disertacion_model->get_revdir_x_disertacion($dis_codigo,$prof_codigo);
        
        if(isset($revdir_x_disertacion['dis_codigo'])&&isset($revdir_x_disertacion['prof_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('rxd_tipo','Rxd Tipo','required|max_length[3]');
			$this->form_validation->set_rules('rxd_fechanombramiento','Rxd Fechanombramiento','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'rxd_tipo' => $this->input->post('rxd_tipo'),
					'rxd_fechanombramiento' => $this->input->post('rxd_fechanombramiento'),
                );

                $this->Revdir_x_disertacion_model->update_revdir_x_disertacion($dis_codigo,$prof_codigo,$params);
                redirect('revdir_x_disertacion/index');
            }
            else
            {   
                $data['revdir_x_disertacion'] = $this->Revdir_x_disertacion_model->get_revdir_x_disertacion($dis_codigo);

                $this->load->model('Trabajo_disertacion_model');
                $data['trabajo'] = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);

                $this->load->model('Profesor_model');
                $data['all_profesores'] = $this->Profesor_model->get_all_profesores_();

                $this->load->view('templates/header');
                $this->load->view('revdir_x_disertacion/edit', $data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The revdir_x_disertacion you are trying to edit does not exist.');
    } 

    /*
     * Deleting revdir_x_disertacion
     */
    function remove($dis_codigo,$prof_codigo)
    {
        $revdir_x_disertacion = $this->Revdir_x_disertacion_model->get_revdir_x_disertacion($dis_codigo,$prof_codigo);

        // check if the revdir_x_disertacion exists before trying to delete it
        if(isset($revdir_x_disertacion['dis_codigo'])&&isset($revdir_x_disertacion['prof_codigo']))
        {
            $this->Revdir_x_disertacion_model->delete_revdir_x_disertacion($dis_codigo,$prof_codigo);
            redirect('revdir_x_disertacion/index');
        }
        else
            show_error('The revdir_x_disertacion you are trying to delete does not exist.');
    }
    
}
