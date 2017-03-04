<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Materia_x_plan_de_estudio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Materia_x_plan_de_estudio_model');
    } 

    /*
     * Listing of materia_x_plan_de_estudio
     */
    private $limit = 5;
    function index()
    {
        $data['materia_x_plan_de_estudio'] = $this->Materia_x_plan_de_estudio_model->get_all_materia_x_plan_de_estudio();


        /*Empiezo de paginacion*/
        $total_rows = $this->Materia_x_plan_de_estudio_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/materia_x_plan_de_estudio/index';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('materia_x_plan_de_estudio/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new materia_x_plan_de_estudio
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('plan_codigo','Plan de Estudio','required');
        $this->form_validation->set_rules('mat_codigo','Materia','required');
        $this->form_validation->set_rules('pac_codigo','Periodo académico','required');

        if($this->form_validation->run())
        {

            $params = array(
                'plan_codigo'=>$this->input->post('plan_codigo'),
                'mat_codigo'=>$this->input->post('mat_codigo'),
                'pac_codigo'=>$this->input->post('pac_codigo'),
            );
            
            $materia_x_plan_de_estudio_id = $this->Materia_x_plan_de_estudio_model->add_materia_x_plan_de_estudio($params);
            redirect('materia_x_plan_de_estudio/index');
        }
        else
        {

            $this->load->model('Plan_de_estudio_model');
            $data['all_planes'] = $this->Plan_de_estudio_model->get_all_planes_de_estudio();
            $this->load->model('Materia_model');
            $data['all_materias'] = $this->Materia_model->get_all_materias();
            $this->load->model('Periodos_academicos_model');
            $data['all_pac'] = $this->Periodos_academicos_model->get_all_periodos_academicos();

            $this->load->view('templates/header');
            $this->load->view('materia_x_plan_de_estudio/add', $data);
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a materia_x_plan_de_estudio
     */
    function edit($plan_codigo,$mat_codigo,$pac_codigo)
    {   
        // check if the materia_x_plan_de_estudio exists before trying to edit it
        $materia_x_plan_de_estudio = $this->Materia_x_plan_de_estudio_model->get_materia_x_plan_de_estudio($plan_codigo,$mat_codigo,$pac_codigo);
        
        if(isset($materia_x_plan_de_estudio['plan_codigo'])&&isset($materia_x_plan_de_estudio['mat_codigo'])&&isset($materia_x_plan_de_estudio['pac_codigo']))
        {
            $this->load->library('form_validation');

            if($this->form_validation->run())
            {   
                $params = array(
                );

                $this->Materia_x_plan_de_estudio_model->update_materia_x_plan_de_estudio($plan_codigo,$params);            
                redirect('materia_x_plan_de_estudio/index');
            }
            else
            {   
                $data['materia_x_plan_de_estudio'] = $this->Materia_x_plan_de_estudio_model->get_materia_x_plan_de_estudio($plan_codigo,$mat_codigo,$pac_codigo);

                $this->load->view('templates/header');
                $this->load->view('materia_x_plan_de_estudio/edit', $data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The materia_x_plan_de_estudio you are trying to edit does not exist.');
    } 

    /*
     * Deleting materia_x_plan_de_estudio
     */
    function remove($plan_codigo,$mat_codigo,$pac_codigo)
    {
        $materia_x_plan_de_estudio = $this->Materia_x_plan_de_estudio_model->get_materia_x_plan_de_estudio($plan_codigo,$mat_codigo,$pac_codigo);

        // check if the materia_x_plan_de_estudio exists before trying to delete it
        if(isset($materia_x_plan_de_estudio['plan_codigo']))
        {
            $this->Materia_x_plan_de_estudio_model->delete_materia_x_plan_de_estudio($plan_codigo,$mat_codigo,$pac_codigo);
            redirect('materia_x_plan_de_estudio/index');
        }
        else
            show_error('The materia_x_plan_de_estudio you are trying to delete does not exist.');
    }
    
}
