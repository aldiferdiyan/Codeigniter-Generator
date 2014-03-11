<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start(); // start session

class Login extends Core
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    
    function index()
    {
	if($this->session->userdata('member_username') != '' AND
	   $this->session->userdata('member_email') != '' AND
	   $this->session->userdata('member_password') != '')
	{
		
		    redirect('dashboard_member');
		
	}
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->CI =& $this;
            $this->form_validation->set_error_delimiters('<p class="text-danger text-center">*', '</p>');
            $this->form_validation->set_rules('username', 'Username', 'xss_clean|trim|htmlspecialchars');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|trim|htmlspecialchars');
 
             if ($this->form_validation->run() == FALSE)
		{
		 $data['_sidebar'] = $this->load->view('/_sidebar','',TRUE);
		 $data['include'] =   $this->load->view('/include',$data,TRUE);
                 $data['content'] =   $this->load->view('/login',$data,TRUE);
                 $this->load->view("site/main",$data);
                 
                }
            else
                {   
                  if($this->check_login() == TRUE)
		  {
		    redirect('dashboard_member');
		  }
                  else
		  {
		    $this->session->set_flashdata('login_error','error message');
		    redirect('login');
		  }
                }
        }
            
    }
    
    private function check_login() // check
    {
		$username         = $this->input->post('username');
		$password         = $this->input->post('password');
		$password_encrypt = sha1(sha1(sha1(md5(md5(md5($password))))));
        
                $query = $this->login_model->check_login($username,$password_encrypt);
                if( $query->num_rows() > 0 )
                    {
			$row = $query->row(1);
			$data = array(
			    'member_username'        => $row->username,
			    'member_email'           => $row->email,
			    'member_password'        => $row->password,
			    'member_id'              => $row->id,
			);
                        $this->session->set_userdata($data);
			
			$this->login_model->update_member($username,$password_encrypt);
			
                        return TRUE;
                    }
                else
                    {
                        return FALSE;
                    }
 
    }
    
    
    function logout()
    {
	if($this->session->userdata('member_username') != '' AND
	   $this->session->userdata('member_email') != '' AND
	   $this->session->userdata('member_password') != '')
	{
	$data = array(
			    'member_username'        => '',
			    'member_email'           => '',
			    'member_password'        => '',
			    'member_id'              => '',
			);
        $this->session->unset_userdata($data);
	 
	   
	redirect('login');
	}
	else
	{
	redirect('login');
	}
    }
    
}
/* end of file : adminpanel/controllers/adminpanel.php */