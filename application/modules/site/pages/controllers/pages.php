<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends Sitecore
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
        $data['include'] =   $this->load->view('/include','',TRUE);
        $data['content'] =   $this->load->view('/content',$data,TRUE);
        $this->load->view("site/main",$data);
    }
    
   
    
    
}