<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends Admincore
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index($member_id = '',$order_id = '',$order_code = '')
    {
        $this->load->view("content");
    }
    
   
    
    
}