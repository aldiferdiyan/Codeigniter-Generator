<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model','model');
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
        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
        
        if ($this->form_validation->run('create') == FALSE)
        {
            $data['include'] =   $this->load->view('/create/include','',TRUE);
            $data['content'] =   $this->load->view('/create/content',$data,TRUE);
            $this->load->view("admin/main",$data);
        }
        else
        {
            core::insert('ac_berita','ancient',array(
				'title' => $this->input->post('title'),
				'title_link' => url_title($this->input->post('title')),
				'intro_content' => $this->input->post('intro_content'),
				'content' => str_replace('../wdc-uploads',base_url('wdc-uploads'),$this->input->post('content')),
				'created' => $this->input->post('created'),
				'created_by' => $this->input->post('created_by'),
				'created_alias' => $this->input->post('created_alias'),
				'meta_key' => $this->input->post('meta_key'),
				'meta_desc' => $this->input->post('meta_desc'),
				'status' => $this->input->post('status'),
				'category_id' => $this->input->post('category_id'),
				));
            redirect('berita');
        }
    }

    
    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update($id = '')
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
            core::update('ac_berita','ancient',array(
				'title' => $this->input->post('title'),
				'intro_content' => $this->input->post('intro_content'),
				'content' => $this->input->post('content'),
				 'created' => $this->input->post('created'),
				'created_by' => $this->input->post('created_by'),
				'created_alias' => $this->input->post('created_alias'),
				'meta_key' => $this->input->post('meta_key'),
				'meta_desc' => $this->input->post('meta_desc'),
				'status' => $this->input->post('status'),
				'category_id' => $this->input->post('category_id'),
				),$this->input->post('id'));
            redirect('berita');
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
        core::delete('ac_berita','ancient',$id);
        redirect('berita');
    }
    
    
}