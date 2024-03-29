<?php

/*
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Prorroga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prorroga_model');
    }

    /*
     * Listing of prorrogas
     */

    private $limit = 5;

    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $data['prorrogas'] = $this->Prorroga_model->get_all_prorrogas();

            /*Empiezo de paginacion*/
            $total_rows = $this->Prorroga_model->count();

            $this->load->library('pagination');
            $config['total_rows'] = $total_rows;
            $config['per_page'] = $this->limit;
            $config['uri_segment'] = 3;
            $config['base_url'] = base_url() . '/prorroga/index';
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
            $data['links'] = explode('&nbsp;', $page_links);
            /*Fin de paginacion*/

            $this->load->helper('form');
            $this->load->helper(array('form'));
            $this->load->view('templates/header');
            $this->load->view('prorroga/index', $data);
            $this->load->view('templates/footer');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }
    function buscarProrroga()
    {

        if (isset($_SERVER['HTTP_REFERER'])) {
            $data['prorrogas'] = $this->Prorroga_model->getProrrogaBusqueda($this->input->post('search'));

            /*Empiezo de paginacion*/
            $total_rows = $this->Prorroga_model->countParamSearch($this->input->post('search'));

            $this->load->library('pagination');
            //   $config['total_rows'] = $total_rows;
            $config['per_page'] = 5;
            $config['uri_segment'] = 3;
            $config['base_url'] = base_url() . '/prorroga/buscarProrroga';


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
            $data['links'] = explode('&nbsp;', $page_links);
            /*Fin de paginacion*/


            $this->load->helper('form');
            $this->load->helper(array('form'));
            $this->load->view('templates/header');
            $this->load->view('prorroga/index', $data);
            $this->load->view('templates/footer');
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }
    /*
     * Adding a new prorroga
     */
    function add()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('pro_fechaint', 'Fecha de Solicitud', 'required');
            $this->form_validation->set_rules('pro_fechainicio', 'Fecha de Inicio', 'required');
            $this->form_validation->set_rules('pro_fechafin', 'Fecha de Fin', 'required');
            $this->form_validation->set_rules('pro_descripcion', 'Descripcion', 'required');
            $this->form_validation->set_rules('pro_detalle', 'Detalle', 'required|max_length[1024]');

            if ($this->form_validation->run()) {
                $params = array(
                    'dis_codigo' => $this->input->post('dis_codigo'),
                    'pro_fechaint' => $this->input->post('pro_fechaint'),
                    'pro_fechainicio' => $this->input->post('pro_fechainicio'),
                    'pro_fechafin' => $this->input->post('pro_fechafin'),
                    'pro_descripcion' => $this->input->post('pro_descripcion'),
                    'pro_detalle' => $this->input->post('pro_detalle'),
                );

                $prorroga_id = $this->Prorroga_model->add_prorroga($params);
                redirect('prorroga/index');
            } else {

                $this->load->model('Trabajo_disertacion_model');
                $data['all_trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_();

                $this->load->view('templates/header');
                $this->load->view('prorroga/add', $data);
                $this->load->view('templates/footer');
            }

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Editing a prorroga
     */
    function edit($pro_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            // check if the prorroga exists before trying to edit it
            $prorroga = $this->Prorroga_model->get_prorroga($pro_codigo);

            if (isset($prorroga['pro_codigo'])) {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('pro_fechaint', 'Fecha de Solicitud', 'required');
                $this->form_validation->set_rules('pro_fechainicio', 'Fecha de Inicio', 'required');
                $this->form_validation->set_rules('pro_fechafin', 'Fecha de Fin', 'required');
                $this->form_validation->set_rules('pro_descripcion', 'Descripcion', 'required');
                $this->form_validation->set_rules('pro_detalle', 'Detalle', 'required|max_length[1024]');

                if ($this->form_validation->run()) {
                    $params = array(
                        'dis_codigo' => $this->input->post('dis_codigo'),
                        'pro_fechaint' => $this->input->post('pro_fechaint'),
                        'pro_fechainicio' => $this->input->post('pro_fechainicio'),
                        'pro_fechafin' => $this->input->post('pro_fechafin'),
                        'pro_descripcion' => $this->input->post('pro_descripcion'),
                        'pro_detalle' => $this->input->post('pro_detalle'),
                    );

                    $this->Prorroga_model->update_prorroga($pro_codigo, $params);
                    redirect('prorroga/index');
                } else {
                    $data['prorroga'] = $this->Prorroga_model->get_prorroga($pro_codigo);

                    $this->load->model('Trabajo_disertacion_model');
                    $data['all_trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion_();

                    $this->load->view('templates/header');
                    $this->load->view('prorroga/edit', $data);
                    $this->load->view('templates/footer');
                }
            } else
                show_error('The prorroga you are trying to edit does not exist.');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Deleting prorroga
     */
    function remove($pro_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $prorroga = $this->Prorroga_model->get_prorroga($pro_codigo);

            // check if the prorroga exists before trying to delete it
            if (isset($prorroga['pro_codigo'])) {
                $this->Prorroga_model->delete_prorroga($pro_codigo);
                redirect('prorroga/index');
            } else
                show_error('The prorroga you are trying to delete does not exist.');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

}
