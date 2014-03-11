<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Membercore extends Core
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('member_username') AND
	   !$this->session->userdata('member_email')  AND
	   !$this->session->userdata('member_password') )
	{   
            redirect('login');
        }
    }


}