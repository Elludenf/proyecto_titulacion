<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Dicta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dicta_model');
    } 

    /*
     * Listing of dicta
     */
    private $limit = 5;
    function index()
    {
        $data['dicta'] = $this->Dicta_model->get_all_dicta();

        /*Empiezo de paginacion*/
        $total_rows = $this->Dicta_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/dicta/index';
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
        $this->load->view('dicta/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new dicta
     */
    function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mat_codigo','Materia','required');

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'prof_codigo'=>$this->input->post('prof_codigo'),
                'mat_codigo'=>$this->input->post('mat_codigo')
            );
            
            $dicta_id = $this->Dicta_model->add_dicta($params);
            redirect('dicta/index');
        }
        else
        {
            $this->load->model('Materia_model');
            $data['all_materias'] = $this->Materia_model->get_all_materias_();
            $this->load->model('Profesor_model');
            $data['all_profesores'] = $this->Profesor_model->get_all_profesores_();
            $this->load->view('templates/header');
            $this->load->view('dicta/add',$data);
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a dicta
     */
    function edit($prof_codigo,$mat_codigo)
    {   
        // check if the dicta exists before trying to edit it
        $dicta = $this->Dicta_model->get_dicta($prof_codigo,$mat_codigo);
        
        if(isset($dicta['prof_codigo'])&&isset($dicta['mat_codigo']))
        {
            $this->load->library('form_validation');
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Dicta_model->update_dicta($prof_codigo,$params);            
                redirect('dicta/index');
            }
            else
            {   
                $data['dicta'] = $this->Dicta_model->get_dicta($prof_codigo);

                $this->load->model('Materia_model');
                $data['all_materias'] = $this->Materia_model->get_all_materias_();

                $this->load->view('templates/header');
                $this->load->view('dicta/edit',$data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The dicta you are trying to edit does not exist.');
    } 

    /*
     * Deleting dicta
     */
    function remove($prof_codigo,$mat_codigo)
    {
        $dicta = $this->Dicta_model->get_dicta($prof_codigo,$mat_codigo);

        // check if the dicta exists before trying to delete it
        if(isset($dicta['prof_codigo'])&&isset($dicta['mat_codigo']))
        {
            $this->Dicta_model->delete_dicta($prof_codigo,$mat_codigo);
            redirect('dicta/index');
        }
        else
            show_error('The dicta you are trying to delete does not exist.');
    }
    
}
