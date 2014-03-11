<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start(); // start session

//include(dirname(__FILE__)."/../../../../models/core_model.php");

class Adminpanel extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('adminpanel_model','model');
	 $this->load->model('admin');
    }
    
    function index()
    {
	if($this->session->userdata('admin_username') != '' AND
	   $this->session->userdata('admin_email') != '' AND
	   $this->session->userdata('admin_password') != '')
	{
		
		    redirect('dashboard');
		
	}
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->CI =& $this;
            $this->form_validation->set_error_delimiters('<p class="text-danger text-center">*', '</p>');
            $this->form_validation->set_rules('username_email', 'Username', 'xss_clean|trim|htmlspecialchars');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|trim|htmlspecialchars');
 
             if ($this->form_validation->run() == FALSE)
		{
                 $this->load->view('adminpanel');
                }
            else
                {   
                  if($this->check_login() == TRUE)
		  {
		    redirect('dashboard');
		  }
                  else
		  {
		    $this->session->set_flashdata('login_error','error message');
		    redirect('adminpanel');
		  }
                }
        }
            
    }
    
    private function check_login() // check
    {
		$username_email   = $this->input->post('username_email');
		$password         = $this->input->post('password');
		$password_encrypt = sha1(md5($password));
        
                $query = $this->model->check_login($username_email,$password_encrypt);
                if( $query->num_rows() > 0 )
                    {
			$row = $query->row(1);
			$data = array(
			    'admin_username'        => $row->username,
			    'admin_email'           => $row->email,
			    'admin_password'        => $row->password,
			    'admin_id'              => $row->id,
			);
                        $this->session->set_userdata($data);
			
			$_SESSION['filemanager'] = md5($row->password); 
			$this->model->update_admin($username_email,$password_encrypt);
			
                        return TRUE;
                    }
                else
                    {
                        return FALSE;
                    }
 
    }
    
    
    function logout()
    {
	if($this->session->userdata('admin_username') != '' AND
	   $this->session->userdata('admin_email') != '' AND
	   $this->session->userdata('admin_password') != '')
	{
	$data = array(
			    'admin_username'        => '',
			    'admin_email'           => '',
			    'admin_password'        => '',
			    'admin_id'              => '',
			);
        $this->session->unset_userdata($data);
	unset($_SESSION['filemanager']);
	   
	redirect('adminpanel');
	}
	else
	{
	redirect('adminpanel');
	}
    }
    
}
/* end of file : adminpanel/controllers/adminpanel.php */