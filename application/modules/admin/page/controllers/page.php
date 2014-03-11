<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('page_model','model');
    }
    
    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function index($id = '')
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
        
        if ($this->form_validation->run('update') == FALSE)
        {
        $data['include'] =   $this->load->view('/update/include','',TRUE);
        $data['content'] =   $this->load->view('/update/content',$data,TRUE);
        $this->load->view("admin/main",$data);
        }
        else
        {
            core::update('ac_page','ancient',array(
				'title' => $this->input->post('title'),
				'content' => str_replace('../wdc-uploads',base_url('wdc-uploads'),$this->input->post('content')),
				'credit_image' => $this->input->post('credit_image'),
				'image' => str_replace('../wdc-uploads',base_url('wdc-uploads'),$this->input->post('image')),
				'created' => $this->input->post('created'),
				'created_by' => $this->input->post('created_by'),
				'created_alias' => $this->input->post('created_alias'),
				'meta_key' => $this->input->post('meta_key'),
				'meta_desc' => $this->input->post('meta_desc'),
				),$this->input->post('id'));
            
	    $this->session->set_flashdata('sukses','sukses');
	    
	    redirect($_SERVER['HTTP_REFERER']);
        }
    }
    
}