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
     * Listing of trabajo_disertacion
     */

    private $limit = 5;

    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $data['trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_all_trabajo_disertacion();

            /*Empiezo de paginacion*/
            $total_rows = $this->Trabajo_disertacion_model->count();

            $this->load->library('pagination');
            $config['total_rows'] = $total_rows;
            $config['per_page'] = $this->limit;
            $config['uri_segment'] = 3;
            $config['base_url'] = base_url() . '/trabajo_disertacion/index';
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
            $this->load->view('trabajo_disertacion/index', $data);
            $this->load->view('templates/footer');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Adding a new trabajo_disertacion
     */
    function add()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('dis_fechainicio', 'Dis Fechainicio', 'required');
            $this->form_validation->set_rules('dis_fechapresentacionplan', 'Dis Fechapresentacionplan', 'required');
            $this->form_validation->set_rules('dis_fechaaprobacion', 'Dis Fechaaprobacion', 'required');
            $this->form_validation->set_rules('dis_titulo', 'Dis Titulo', 'required|max_length[1024]');
            $this->form_validation->set_rules('dis_estado', 'Dis Estado', 'required');

            if ($this->form_validation->run()) {
                $params = array(
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
            } else {
                $this->load->view('templates/header');
                $this->load->view('trabajo_disertacion/add');
                $this->load->view('templates/footer');
            }

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Editing a trabajo_disertacion
     */
    function edit($dis_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            // check if the trabajo_disertacion exists before trying to edit it
            $trabajo_disertacion = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);

            if (isset($trabajo_disertacion['dis_codigo'])) {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('dis_fechainicio', 'Dis Fechainicio', 'required');
                $this->form_validation->set_rules('dis_fechapresentacionplan', 'Dis Fechapresentacionplan', 'required');
                $this->form_validation->set_rules('dis_fechaaprobacion', 'Dis Fechaaprobacion', 'required');
                $this->form_validation->set_rules('dis_titulo', 'Dis Titulo', 'required|max_length[1024]');
                $this->form_validation->set_rules('dis_estado', 'Dis Estado', 'required');

                if ($this->form_validation->run()) {
                    $params = array(
                        'dis_fechainicio' => $this->input->post('dis_fechainicio'),
                        'dis_fechapresentacionplan' => $this->input->post('dis_fechapresentacionplan'),
                        'dis_fechaaprobacion' => $this->input->post('dis_fechaaprobacion'),
                        'dis_titulo' => $this->input->post('dis_titulo'),
                        'dis_estado' => $this->input->post('dis_estado'),
                        'dis_fechafin' => $this->input->post('dis_fechafin'),
                        'dis_defensa' => $this->input->post('dis_defensa'),
                    );

                    $this->Trabajo_disertacion_model->update_trabajo_disertacion($dis_codigo, $params);
                    redirect('trabajo_disertacion/index');
                } else {
                    $data['trabajo_disertacion'] = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);

                    $this->load->view('templates/header');
                    $this->load->view('trabajo_disertacion/edit', $data);
                    $this->load->view('templates/footer');
                }
            } else
                show_error('The trabajo_disertacion you are trying to edit does not exist.');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Deleting trabajo_disertacion
     */
    function remove($dis_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $trabajo_disertacion = $this->Trabajo_disertacion_model->get_trabajo_disertacion($dis_codigo);

            // check if the trabajo_disertacion exists before trying to delete it
            if (isset($trabajo_disertacion['dis_codigo'])) {
                $this->Trabajo_disertacion_model->delete_trabajo_disertacion($dis_codigo);
                redirect('trabajo_disertacion/index');
            } else
                show_error('The trabajo_disertacion you are trying to delete does not exist.');


        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

}
