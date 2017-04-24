<?php

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $username = $this->input->post('rolname');
        $this->form_validation->set_rules('rolname', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('rolpassword', 'Clave', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page


            $this->load->view('templates/header');
            $this->load->view('login/login_view');
            $this->load->view('templates/footer');

        }
        else
        {
            //Go to private area
            //$this->Login_model->logout();

            if($this->session-> __get('rol_group')== 'R_ESTUDIANTE')
            {
                 redirect('estudiante/perfil','refresh');
            }
            if($this->session-> __get('rol_group')== 'R_PROFESOR')
            {
                redirect('profesor/perfil','refresh');
            }
            else

               redirect('evento/index', 'refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('rolname');

        //query the database
        $result = $this->Login_model->login($username, $password);

        if($result)
        {
            $sess_array = array();
            //Obteniendo rol
            $this->load->model('Login_model');
            $rol_=$this->Login_model->get_grup_role($username);
            $rol_g=$rol_['rolname'];//Valor de la base
            //valor para mostrar en pantalla
            if($rol_g=='postgres'){
                $tipo_usuario=$rol_g;
                    }
            else{
                $tipo_usuario=substr($rol_g,2);
                    }
            foreach($result as $row)
            {
                $sess_array = array(
                    'rolpassword' => $row->rolpassword,
                    'rolname' => $row->rolname,
                    'rol_group' => $rol_g,//Valor de la base
                    'tipo_usuario'=>$tipo_usuario//valor para mostrar en pantalla
                );
                $this->session->set_userdata($sess_array);
            }
            $this->load->model('Login_model');
            $this->Login_model->set_role($username);
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Usuario o contraseña inválida');
            return false;
        }
    }
}
?>