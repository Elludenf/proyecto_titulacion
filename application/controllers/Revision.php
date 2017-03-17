<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Revision extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Revision_model');
    } 

    /*
     * Listing of revisiones
     */
    private $limit = 5;
    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $data['revisiones'] = $this->Revision_model->get_all_revisiones();

        /*Empiezo de paginacion*/
        $total_rows = $this->Revision_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/revision/index';
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
        $this->load->view('revision/index', $data);
        $this->load->view('templates/footer');

        }  else{


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Adding a new revision
     */
    function add()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

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
			$data['all_trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_();

            $this->load->model('Revdir_x_disertacion_model');
            $data['all_revdir'] = $this->Revdir_x_disertacion_model->get_all_revdir_x_disertacion_();

            $this->load->model('Profesor_model');
            $c=0;
            $a_prof=[];
            foreach ($data['all_revdir'] as $revdir){
                $prof=$this->Profesor_model->get_profesor($revdir['prof_codigo']);
                $a_prof[$c]=$prof;
                $c++;
        }

			$this->load->model('Profesor_model');
			$data['all_profesores'] =$a_prof;

            $this->load->view('templates/header');
            $this->load->view('revision/add', $data);
            $this->load->view('templates/footer');
        }

        }  else{


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }  

    /*
     * Editing a revision
     */
    function edit($obs_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            // check if the revision exists before trying to edit it
        $revision = $this->Revision_model->get_revision($obs_codigo);
        
        if(isset($revision['obs_codigo']))
        {
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

                $this->Revision_model->update_revision($obs_codigo,$params);            
                redirect('revision/index');
            }
            else
            {   
                $data['revision'] = $this->Revision_model->get_revision($obs_codigo);
    
				$this->load->model('Trabajo_disertacion_model');
				$data['all_trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_();

				$this->load->model('Profesor_model');
				$data['all_profesores'] = $this->Profesor_model->get_all_profesores_();

                $this->load->view('templates/header');
                $this->load->view('revision/edit', $data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The revision you are trying to edit does not exist.');

        }  else{


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    } 

    /*
     * Deleting revision
     */
    function remove($obs_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $revision = $this->Revision_model->get_revision($obs_codigo);

        // check if the revision exists before trying to delete it
        if(isset($revision['obs_codigo']))
        {
            $this->Revision_model->delete_revision($obs_codigo);
            redirect('revision/index');
        }
        else
            show_error('The revision you are trying to delete does not exist.');

        }  else{


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }
    
}
