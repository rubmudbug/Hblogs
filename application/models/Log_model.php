<?php

/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/27
 * Time: 22:41
 */
class Log_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function form_submit()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header.php');
            $this->load->view('log');
            $this->load->view('templates/footer.php');
        } else {

            $data = array(
                'user' => $this->input->post('username'),
                //加密
                'pass' => $this->input->post('password')
            );
            $newdata = array(
                'user-name' => $data ['user'],
                'user-pwd' => $data['pass'],
                // 'luptime' => time()
            );
            if ($_POST['submit'] == 'login') {
                $query = $this->db->get_where('user', array(
                    'user_name' => $data ['user']
                ), 1, 0);

                foreach ($query->result() as $row) {
                    $pass = $row->user_pwd;
                    if ($pass == $data ['pass']) {
                        $this->session->set_userdata($newdata);
                        $this->load->view('templates/header.php');
                        $this->load->view('logSuccessful');
                        $this->load->view('templates/footer.php');

                    }
                }

            } else if ($_POST['submit'] == 'register') {

                $this->session->set_userdata($newdata);
                $this->db->insert('user', $data);
                $this->load->view('templates/header');
                $this->load->view('logSuccessful');
                $this->load->view('templates/footer');
            } else {
                echo 'opps';
                $this->session->sess_destroy();
                $this->load->view('templates/header.php');
                $this->load->view('log');
                $this->load->view('templates/footer.php');

            }
        }

    }
}