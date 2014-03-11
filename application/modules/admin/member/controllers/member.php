<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('member_model','model');
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
//            core::insert('mb_member','member',array(
//				'nama' => $this->input->post('nama'),
//				'username' => $this->input->post('username'),
//				'password' => $this->input->post('password'),
//				'email' => $this->input->post('email'),
//				'no_telepon' => $this->input->post('no_telepon'),
//				'tgl_lahir' => $this->input->post('tgl_lahir'),
//				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
//				'created' => $this->input->post('created'),
//				'avatar' => $this->input->post('avatar'),
//				'description' => $this->input->post('description'),
//				));
//            redirect('member');
//        }
//    }
//
//    
//    /* METHOD "UPDATE"
//     * berfungsi untuk mengupdate data dari database
//     */
//    function update($id = '')
//    {
//        $this->load->library('form_validation');
//        $this->form_validation->CI =& $this;
//        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
//        
//        if ($this->form_validation->run('update') == FALSE)
//        {
//        $data['include'] =   $this->load->view('/update/include','',TRUE);
//        $data['content'] =   $this->load->view('/update/content',$data,TRUE);
//        $this->load->view("admin/main",$data);
//        }
//        else
//        {
//            core::update('mb_member','member',array(
//				'nama' => $this->input->post('nama'),
//				'username' => $this->input->post('username'),
//				'password' => $this->input->post('password'),
//				'email' => $this->input->post('email'),
//				'no_telepon' => $this->input->post('no_telepon'),
//				'tgl_lahir' => $this->input->post('tgl_lahir'),
//				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
//				'created' => $this->input->post('created'),
//				'avatar' => $this->input->post('avatar'),
//				'description' => $this->input->post('description'),
//				),$this->input->post('id'));
//            redirect('member');
//        }
//    }
//

 /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update($id = '',$date = '',$status = '')
    {
            core::update('mb_member','member',array(
				'status' => $status,
				 $date => date("Y-m-d H:i:s"),
				),$id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
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
        core::delete('mb_member','member',$id);
        redirect('member');
    }
    
    
}