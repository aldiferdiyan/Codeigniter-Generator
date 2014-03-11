<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model','model');
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
            core::insert('ac_admin','ancient',array(
				'username' => $this->input->post('username'),
				'password' => sha1(md5($this->input->post('password'))),
				'email' => $this->input->post('email'),
				'no_telepon' => $this->input->post('no_telepon'),
				'created' => date("Y-m-d H:i:s"),
				'status' => $this->input->post('status'),
				));
            redirect('admin');
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
            core::update('ac_admin','ancient',array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				
				'email' => $this->input->post('email'),
				'no_telepon' => $this->input->post('no_telepon'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'created' => $this->input->post('created'),
				'status' => $this->input->post('status'),
				'avatar' => $this->input->post('avatar'),
				'description' => $this->input->post('description'),
				),$this->input->post('id'));
            redirect('admin');
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
        core::delete('ac_admin','ancient',$id);
        redirect('admin');
    }
    
    
}