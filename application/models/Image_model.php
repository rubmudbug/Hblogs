<?php
/**
 * Created by PhpStorm.
 * User: Cybertron
 * Date: 2017/9/28
 * Time: 19:07
 */

class Image_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function setImage()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('user-file')) {
           return  false;

        } else {
            return true;
        }
    }
}