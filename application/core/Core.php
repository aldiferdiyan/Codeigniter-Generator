<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Core extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
	$this->load->model('CrudModel');
	
    }
}