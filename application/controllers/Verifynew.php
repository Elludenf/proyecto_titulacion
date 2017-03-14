<?php

class VerifyNew extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Cambio_model','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('rolname', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('rolpassword', 'Clave', 'trim|required|callback_check_database');
        $this->form_validation->set_rules('rolpassword_nuevo', 'Clave_nuevo', 'trim|required');


        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page


            $this->load->view('templates/header');
            $this->load->view('Cambio/cambio_view');
            $this->load->view('templates/footer');

        }
        else
        {
            //Go to private area

            redirect('estudiante/index', 'refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('rolname');
        $password_nuevo = $this->input->post('rolpassword_nuevo');

        //query the database
        $result = $this->Cambio_model->cambio_ejecucion2($username, $password, $password_nuevo);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'rolpassword' => $row->rolpassword,
                    'rolname' => $row->rolname
                );
                $this->session->set_userdata($sess_array);
            }
            $this->load->model('Cambio_model');
            $this->Cambio_model->set_role($username);
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }



}
?>