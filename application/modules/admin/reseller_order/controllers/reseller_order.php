<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reseller_order extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('reseller_order_model','model');
	core::update_where('rs_order','reseller',array('new_coming' => 0),'new_coming','1');
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
    
//    /* METHOD "CREATE"
//     * berfungsi untuk membuat / insert data ke dalam database
//     */
//    function create()
//    {
//        $this->load->library('form_validation');
//        $this->form_validation->CI =& $this;
//        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
//        
//        if ($this->form_validation->run('create') == FALSE)
//        {
//            $data['include'] =   $this->load->view('/create/include','',TRUE);
//            $data['content'] =   $this->load->view('/create/content',$data,TRUE);
//            $this->load->view("admin/main",$data);
//        }
//        else
//        {
//            core::insert('rs_order','reseller',array(
//				'balance' => $this->input->post('balance'),
//				'harga' => $this->input->post('harga'),
//				'order_code' => $this->input->post('order_code'),
//				'reseller_id' => $this->input->post('reseller_id'),
//				'created' => $this->input->post('created'),
//				'status' => $this->input->post('status'),
//				));
//            redirect('reseller_order');
//        }
//    }

    
    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update()
    {
	if($this->input->post('status') == 'paid')
	{
	    $sisa_saldo = $this->input->post('harga_bayar') - $this->input->post('harga');
	   
            core::update('rs_order','reseller',array(
				'status'      => $this->input->post('status'),
				'harga_bayar' => $this->input->post('harga_bayar'),
				'harga_sisa'  => $sisa_saldo,
				'modified'     => date("Y-m-d H:i:s"),
				),$this->input->post('id'));
	    
	    $query = core::get_all('rs_reseller','reseller',array('id' => $this->input->post('reseller_id')),1);
	    
	    $row = $query->row(1);
	    
	    
	    $new_balance = $row->balance + $this->input->post('balance');
	    $new_saldo    = $row->saldo + ($this->input->post('harga_bayar') - $this->input->post('harga'));
	    
	    core::update('rs_reseller','reseller',array(
				'balance' => $new_balance,
				'saldo'   => $new_saldo,
			    ),$this->input->post('reseller_id'));
	    
            header("Location: " . $_SERVER['HTTP_REFERER']);
	}
	else
	{
	    core::update('rs_order','reseller',array(
				'status'      => $this->input->post('status'),
				'harga_bayar' => 0,
				'harga_sisa'  => 0,
				),$this->input->post('id'));
	    
	    $query = core::get_all('rs_reseller','reseller',array('id' => $this->input->post('reseller_id')),1);
	    
	    $row = $query->row(1);
	    
	    
	    $new_balance = $row->balance - $this->input->post('balance');
	    $new_saldo    = $row->saldo - $this->input->post('harga_sisa');
	    
	    core::update('rs_reseller','reseller',array(
				'balance' => $new_balance,
				'saldo'   => $new_saldo,
			    ),$this->input->post('reseller_id'));
	    
	     header("Location: " . $_SERVER['HTTP_REFERER']);
	}
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
        core::delete('rs_order','reseller',$id);
        redirect('reseller_order');
    }
    
    
}