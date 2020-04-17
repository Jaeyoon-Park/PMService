<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->model =& $this->main_model;

        unset($_SESSION['user_info']);
    }

    public function index()
    {
        set_session_data();

        $data = array(
            'container' => BROWSER_PATH.'main/main'
        );
        $this->load->view('/common/template', $data);
    }

    public function main1()
    {
        $data = array(
            'container' => BROWSER_PATH.'main/main1'
        );
        $this->load->view('/common/template', $data);
    }

    public function main2()
    {
        $data = array(
            'container' => BROWSER_PATH.'main/main2'
        );
        $this->load->view('/common/template', $data);
    }

    public function main3()
    {
        $data = array(
            'container' => BROWSER_PATH.'main/main3'
        );
        $this->load->view('/common/template', $data);
    }
}
