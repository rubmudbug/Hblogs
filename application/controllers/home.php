<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/27
 * Time: 18:24
 */

class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');

    }

    public function index()
    {
        if(@$_SESSION['user-name']=='未登录'||@empty($_SESSION)){
            $newdata = array(
                'user-name' => '未登录' ,
            );
            $this->session->set_userdata($newdata);
        }


        $data['news'] = $this->news_model->get_news();
        $data['title'] = '首页';

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($id);

        if (empty($data['news_item'])) {
            show_404();
        }
        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
}
