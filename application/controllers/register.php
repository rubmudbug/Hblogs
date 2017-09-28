<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/28
 * Time: 10:04
 */

class register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('register');
        $this->load->view('templates/footer');
    }

    public function registerForm()
    {
        $this->load->model('register_model');
        echo $this->$this->register_model->register();
        if ($this->register_model->register()) {
            $art = '用户名或者邮箱重复';
            echo 'false';
        } else {
            $data = $this->register_model->getUserData();
            $this->db->insert('user',$data);
            redirect('/');
        }
    }
}