<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 7/30/18
 * Time: 11:30
 */
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Eloquent;
include APPPATH . 'config/database.php';
class MY_Model extends Eloquent
{
    /**
     * MY_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $capsule = new Capsule;
        $capsule->addconnection(array(
            'driver' => $db['default']['dbdriver'],
            'host' => $db['default']['hostname'],
            'database' => $db['default']['database'],
            'username' => $db['default']['username'],
            'password' => $db['default']['password'],
            'collation' => $db['default']['dbcollat'],
            'charset' => $db['default']['char_set']
        ));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
