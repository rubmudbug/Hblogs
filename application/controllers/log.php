<?php

/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/26
 * Time: 20:23
 */
class log extends CI_Controller
{

  //  private $pass = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        if($_SESSION['user-name']=='未登录'){
            $this->load->view('templates/header.php');
            $this->load->view('log');
            $this->load->view('templates/footer.php');
    }else{
            redirect('/');
        }

    }

    public function formsubmit()
    {
        $this->load->model('log_model');
        $this->log_model->form_submit();
    }
}

?>