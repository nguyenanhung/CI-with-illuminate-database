<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 7/30/18
 * Time: 11:40
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    /**
     * Ez như 1 trò đùa :))
     * thoải mái dùng như eloquent
     */
    public function index()
    {
        $this->load->model('users_model');
        var_dump($this->users_model->first()->toArray());
    }
}
