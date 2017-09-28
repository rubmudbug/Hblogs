<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/28
 * Time: 14:11
 */

class Message_model extends CI_Model
{
    public function setMessage($mess)
    {
        if ($_SESSION['user_name'] != '未登录' && !empty($_SESSION)) {
          $message=  $this->input->post('user_message');
          $image=  $this->input->post('user_iamge');
        echo $message;
        echo $image;
        }
    }
}