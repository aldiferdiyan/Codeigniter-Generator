<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Voucher extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('voucher_model','model');
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
        
     /* METHOD "SEARCH"*/
    function search()
    {
        $data['include'] =   $this->load->view('/search/include','',TRUE);
        $data['content'] =   $this->load->view('/search/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
   /* METHOD "CREATE"
     * berfungsi untuk membuat / insert data ke dalam database
     */
    function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-error">*', '</p>');  
        
        if ($this->form_validation->run('create') == FALSE)
        {
            $data['include'] =   $this->load->view('/create/include','',TRUE);
	    $data['generate'] =  '';
            $data['content'] =   $this->load->view('/create/content',$data,TRUE);
            $this->load->view("admin/main",$data);
        }
        else
        {
	 
            $data['nilai']  = $this->input->post('nilai');
	    $data['jumlah'] = $this->input->post('jumlah');
	    
            $data['include'] =   $this->load->view('/create/include',$data,TRUE);
	    $data['generate'] =  $this->load->view('/create/content_generate',$data,TRUE);;
            $data['content'] =   $this->load->view('/create/content',$data,TRUE);
            $this->load->view("admin/main",$data);
        }
    }
    
    function insert_voucher()
    {
	$db = $this->load->database('ancient',TRUE);
	 
	foreach($_POST['x'] as $x)
	{
	     $db->query("INSERT IGNORE INTO ac_voucher (voucher_code, nilai, created)
				VALUES('".$x['code']."','".$x['nilai']."','".date('Y-m-d H:i:s')."')");
	     
	     
	}
	redirect('voucher');
	 
    }
    
    
     
    
    function detail($id = '')
    {
        $data['include'] =   $this->load->view('/detail/include','',TRUE);
        $data['content'] =   $this->load->view('/detail/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {
        core::delete('ac_voucher','ancient',$id);
        redirect('voucher');
    }
    
    
}