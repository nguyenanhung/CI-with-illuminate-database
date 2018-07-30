<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 7/30/18
 * Time: 11:32
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends MY_Model
{
    protected $table = 'users';
    /**
     * Users_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
