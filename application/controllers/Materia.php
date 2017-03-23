<?php

/*
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */

class Materia extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Materia_model');
    }

    /*
     * Listing of materias
     */
    private $limit = 5;

    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $data['materias'] = $this->Materia_model->get_all_materias();

            /*Empiezo de paginacion*/
            $total_rows = $this->Materia_model->count();

            $this->load->library('pagination');
            $config['total_rows'] = $total_rows;
            $config['per_page'] = $this->limit;
            $config['uri_segment'] = 3;
            $config['base_url'] = base_url() . '/materia/index';
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
            $this->load->view('materia/index', $data);
            $this->load->view('templates/footer');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Adding a new materia
     */
    function add()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('mat_nombre', 'Nombre', 'required|max_length[100]');
            $this->form_validation->set_rules('mat_nivel', 'Nivel', 'required|integer');

            if ($this->form_validation->run()) {
                //Agregado
                $this->db->select_max('mat_codigo');
                $result = $this->db->get('materias')->row_array();
                //echo $result['per_codigo'];
                //
                $params = array(
                    'mat_codigo' => $result['mat_codigo'] + 1,
                    'mat_nombre' => $this->input->post('mat_nombre'),
                    'mat_nivel' => $this->input->post('mat_nivel'),
                );

                $materia_id = $this->Materia_model->add_materia($params);
                redirect('materia/index');
            } else {
                $this->load->view('templates/header');
                $this->load->view('materia/add');
                $this->load->view('templates/footer');
            }

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Editing a materia
     */
    function edit($mat_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            // check if the materia exists before trying to edit it
            $materia = $this->Materia_model->get_materia($mat_codigo);

            if (isset($materia['mat_codigo'])) {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('mat_nombre', 'Nombre', 'required|max_length[100]');
                $this->form_validation->set_rules('mat_nivel', 'Nivel', 'required|integer');

                if ($this->form_validation->run()) {
                    $params = array(
                        'mat_nombre' => $this->input->post('mat_nombre'),
                        'mat_nivel' => $this->input->post('mat_nivel'),
                    );

                    $this->Materia_model->update_materia($mat_codigo, $params);
                    redirect('materia/index');
                } else {
                    $data['materia'] = $this->Materia_model->get_materia($mat_codigo);

                    $this->load->view('templates/header');
                    $this->load->view('materia/edit', $data);
                    $this->load->view('templates/footer');
                }
            } else
                show_error('The materia you are trying to edit does not exist.');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

    /*
     * Deleting materia
     */
    function remove($mat_codigo)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {

            $materia = $this->Materia_model->get_materia($mat_codigo);

            // check if the materia exists before trying to delete it
            if (isset($materia['mat_codigo'])) {
                $this->Materia_model->delete_materia($mat_codigo);
                redirect('materia/index');
            } else
                show_error('The materia you are trying to delete does not exist.');

        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

}
