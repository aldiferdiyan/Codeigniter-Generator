<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admincore
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
        $data['include'] =   '';
        $data['content'] =   $this->load->view('/dashboard',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
   
    
    
}