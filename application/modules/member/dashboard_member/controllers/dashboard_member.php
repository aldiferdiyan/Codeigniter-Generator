<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_member extends Membercore
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
        $data['content'] =   $this->load->view('/content',$data,TRUE);
        $this->load->view("member/main",$data);
    }
    
   
    
    
}