<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/28
 * Time: 10:07
 */

class Register_model extends CI_Model
{

    private $user_form_data=array();

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');

    }

    public function register()
    {
        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_pwd');
        $user_pwd = $this->input->post('user_email');

        $this->user_form_data ['user_name']= $user_name;
        $this->user_form_data['user_email']=$user_email;
        $this->user_form_data['user_pwd']=$user_pwd;

        $query = $this->db->query('SELECT * FROM user');

        foreach ($query->result_array() as $item) {

           // echo $item['user_name'].'and'.$this->user_form_data['user_name'];
            if ($item['user_name'] == $this->user_form_data['user_name'] || $item['user_email'] == $this->user_form_data['user_email']) {
                echo 'if';
                return true;
            }
        }
    }

    public function getUserData()
    {
        return $this->user_form_data;
    }
}