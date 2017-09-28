<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/28
 * Time: 13:24
 */

class message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('message');
        $this->load->view('templates/footer');
    }

    public function do_text()
    {
        $this->load->model('message_model');
        $this->message_model->setMessage();
    }
    public function do_upload(){
        $this->load->model('Image_model');
        $this->image_model->setImage();
    }
}
?>