<?php
class Admin extends CI_Controller { 
    public function view($page= 'login')
    {
        
       if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                echo('no existe la pagina');
                show_404();
                
        }
         $data['title'] = ucfirst('Puceq3123123123123213'); // Capitalize the first letter

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view($page, $data);
        $this->load->view('templates/footer', $data);
       
    }
}