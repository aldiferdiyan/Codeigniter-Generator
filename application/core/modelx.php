<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Modelx extends CI_model
{
    public $table;
   
    function __construct()
    {
        parent::__construct();
    }
    
   function model()
   {
       echo $this->table();
   }
    
    
}
