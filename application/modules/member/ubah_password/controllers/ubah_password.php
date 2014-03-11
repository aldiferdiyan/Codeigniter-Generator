<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ubah_password extends Membercore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ubah_password_model');
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
          $this->load->library('form_validation');
            $this->form_validation->CI =& $this;
            $this->form_validation->set_error_delimiters('<p class="text-error">*', '</p>');
            $this->form_validation->set_rules('password_lama', 'Password lama', 'xss_clean|trim|htmlspecialchars|callback_check_password');
            $this->form_validation->set_rules('password_baru', 'Password baru', 'xss_clean|trim|htmlspecialchars|min_length[4]|max_length[15]|matches[ulangi_password_baru]');
            $this->form_validation->set_rules('ulangi_password_baru', 'Ulangi Password baru', 'xss_clean|trim|htmlspecialchars|min_length[4]|max_length[15]|matches[password_baru]');
 
             if ($this->form_validation->run() == FALSE)
		{
                     $data['include'] =   '';
                    $data['content'] =   $this->load->view('/content',$data,TRUE);
                    $this->load->view("member/main",$data);
                }
                else
                {
                   core::update('mb_member','member',array(
				'password' => sha1(sha1(sha1(md5(md5(md5($this->input->post('password_baru'))))))),
				),$this->session->userdata('member_id'));
                   $this->session->set_flashdata('sukses','sukses');
                   redirect('ubah_password');
                }
    }
    
    function check_password($data)
    {
	$password_encrypt = sha1(sha1(sha1(md5(md5(md5($data))))));
	$check = $this->ubah_password_model->check_password($password_encrypt);
       
	if($check->num_rows() == 0)
	{
	    $this->form_validation->set_message('check_password', '%s Salah');
	    return FALSE;
	}
	else
	{
	    return TRUE;
	}
    }
    
   
    
    
}