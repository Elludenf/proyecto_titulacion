<?php
/**
 * Created by PhpStorm.
 * User: rober_000
 * Date: 23-Apr-17
 * Time: 5:07 PM
 */

class Evento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Evento_model');
    }

    /*
     * Listing of evento
     */
    function index()
    {

        $data['evento'] = $this->Evento_model->get_all_evento();
      
        $data['_view'] = 'evento/index';
        $this->load->view('templates/header');
        $this->load->view('evento/index',$data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new evento
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('eve_tema','Eve Tema','required');
        $this->form_validation->set_rules('eve_fecha','Eve Fecha','required');

        if($this->form_validation->run())
        {
            $params = array(
                'eve_fecha' => $this->input->post('eve_fecha'),
                'eve_tema' => $this->input->post('eve_tema'),
                'eve_descripcion' => $this->input->post('eve_descripcion'),
            );

            $evento_id = $this->Evento_model->add_evento($params);
            redirect('evento/index');
        }
        else
        {
            $data['_view'] = 'evento/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a evento
     */
    function edit($eve_codigo)
    {
        // check if the evento exists before trying to edit it
        $data['evento'] = $this->Evento_model->get_evento($eve_codigo);

        if(isset($data['evento']['eve_codigo']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('eve_tema','Eve Tema','required');
            $this->form_validation->set_rules('eve_fecha','Eve Fecha','required');

            if($this->form_validation->run())
            {
                $params = array(
                    'eve_fecha' => $this->input->post('eve_fecha'),
                    'eve_tema' => $this->input->post('eve_tema'),
                    'eve_descripcion' => $this->input->post('eve_descripcion'),
                );

                $this->Evento_model->update_evento($eve_codigo,$params);
                redirect('evento/index');
            }
            else
            {
                $data['_view'] = 'evento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The evento you are trying to edit does not exist.');
    }

    /*
     * Deleting evento
     */
    function remove($eve_codigo)
    {
        $evento = $this->Evento_model->get_evento($eve_codigo);

        // check if the evento exists before trying to delete it
        if(isset($evento['eve_codigo']))
        {
            $this->Evento_model->delete_evento($eve_codigo);
            redirect('evento/index');
        }
        else
            show_error('The evento you are trying to delete does not exist.');
    }

}
?>