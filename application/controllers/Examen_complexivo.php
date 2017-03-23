<?php

/*
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Examen_complexivo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Examen_complexivo_model');
    }

    /*
     * Listing of examenes_complexivo
     */
    private $limit = 5;

    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $data['examenes_complexivo'] = $this->Examen_complexivo_model->get_all_examenes_complexivo();

            /*Empiezo de paginacion*/
            $total_rows = $this->Examen_complexivo_model->count();

            $this->load->library('pagination');
            $config['total_rows'] = $total_rows;
            $config['per_page'] = $this->limit;
            $config['uri_segment'] = 3;
            $config['base_url'] = base_url() . '/examen_complexivo/index';
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
            $this->load->view('examen_complexivo/index', $data);
            $this->load->view('templates/footer');
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Adding a new examen_complexivo
     */
    function add()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('est_codigo', 'Codigo Estudiante', 'integer');
            $this->form_validation->set_rules('exa_fechainicio', 'Fecha de Inicio', 'required');
            $this->form_validation->set_rules('exa_estado', 'Estado', 'required');
            $this->form_validation->set_rules('exa_horas_docencia', 'Horas de Docencia', 'integer');
            $this->form_validation->set_rules('exa_horas_autonomas', 'Horas Autonomas', 'integer');


            if (empty($this->input->post('exa_horas_docencia'))) {$horas_docencia = NULL;} else {$horas_docencia=$this->input->post('exa_horas_docencia');}
            if (empty($this->input->post('exa_horas_autonomas'))) {$horas_autonomas = NULL;} else {$horas_autonomas=$this->input->post('exa_horas_autonomas');}


            if ($this->form_validation->run()) {
                $params = array(
                    'est_codigo' => $this->input->post('est_codigo'),
                    'exa_fechainicio' => $this->input->post('exa_fechainicio'),
                    'exa_estado' => $this->input->post('exa_estado'),
                    'exa_horas_docencia' => $horas_docencia,
                    'exa_horas_autonomas' => $horas_autonomas,
                );

                $examen_complexivo_id = $this->Examen_complexivo_model->add_examen_complexivo($params);
                redirect('examen_complexivo/index');
            } else {

                $this->load->model('Estudiante_model');
                $data['all_estudiantes'] = $this->Estudiante_model->get_all_estudiantes_no_elabora_ni_toma();

                $this->load->view('templates/header');
                $this->load->view('examen_complexivo/add', $data);
                $this->load->view('templates/footer');
            }
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Editing a examen_complexivo
     */
    function edit($exa_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            // check if the examen_complexivo exists before trying to edit it
            $examen_complexivo = $this->Examen_complexivo_model->get_examen_complexivo($exa_codigo);

            if (isset($examen_complexivo['exa_codigo'])) {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('est_codigo', 'Codigo Estudiante', 'integer');
                $this->form_validation->set_rules('exa_fechainicio', 'Fecha de Inicio', 'required');
                $this->form_validation->set_rules('exa_estado', 'Estado', 'required');
                $this->form_validation->set_rules('exa_horas_docencia', 'Horas de Docencia', 'integer');
                $this->form_validation->set_rules('exa_horas_autonomas', 'Horas Autonomas', 'integer');


                if (empty($this->input->post('exa_horas_docencia'))) {$horas_docencia = NULL;} else {$horas_docencia=$this->input->post('exa_horas_docencia');}
                if (empty($this->input->post('exa_horas_autonomas'))) {$horas_autonomas = NULL;} else {$horas_autonomas=$this->input->post('exa_horas_autonomas');}

                if ($this->form_validation->run()) {
                    $params = array(
                        'est_codigo' => $this->input->post('est_codigo'),
                        'exa_fechainicio' => $this->input->post('exa_fechainicio'),
                        'exa_estado' => $this->input->post('exa_estado'),
                        'exa_horas_docencia' => $horas_docencia,
                        'exa_horas_autonomas' => $horas_autonomas,
                    );

                    $this->Examen_complexivo_model->update_examen_complexivo($exa_codigo, $params);
                    redirect('examen_complexivo/index');
                } else {
                    $data['examen_complexivo'] = $this->Examen_complexivo_model->get_examen_complexivo($exa_codigo);

                    $this->load->model('Estudiante_model');
                    $data['all_estudiantes'] = $this->Estudiante_model->get_all_estudiantes_();

                    $this->load->view('templates/header');
                    $this->load->view('examen_complexivo/edit', $data);
                    $this->load->view('templates/footer');
                }
            } else
                show_error('The examen_complexivo you are trying to edit does not exist.');
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Deleting examen_complexivo
     */
    function remove($exa_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $examen_complexivo = $this->Examen_complexivo_model->get_examen_complexivo($exa_codigo);

            // check if the examen_complexivo exists before trying to delete it
            if (isset($examen_complexivo['exa_codigo'])) {
                $this->Examen_complexivo_model->delete_examen_complexivo($exa_codigo);
                redirect('examen_complexivo/index');
            } else
                show_error('The examen_complexivo you are trying to delete does not exist.');
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

}
