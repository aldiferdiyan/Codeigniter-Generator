<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Test extends Core
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        
       $query = admin::getSearch('reseller_id','0',14);
       $totalRows = admin::getAll();
       echo "Menampilkan ".$query->num_rows();
       echo " Dari ". $totalRows->num_rows();
       echo "<br>";
       foreach($query->result() as $row){
	    echo $row->voucher_code;
	    echo "<br>";
       }
       
       //echo $this->pagination->create_links();
    }
     
}