<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Model extends CI_model
{
    function __construct()
    {
        parent::__construct();
        
    }
    function ima()
    {
        $this->table();
    }
    
    abstract function table();
}