<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lupa_password extends Sitecore
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
          $this->load->library('form_validation');
            $this->form_validation->CI =& $this;
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean|trim|htmlspecialchars|callback_check_email');
          
             if ($this->form_validation->run() == FALSE)
		{
                     $data['include'] =   '';
                    $data['content'] =   $this->load->view('/content',$data,TRUE);
                    $this->load->view("site/main",$data);
                }
                else
                {
                   $generate = sha1(uniqid($this->input->post('email'),TRUE));
		   $recovery = substr($generate,0,8);
		   core::update_where('mb_member','member',array(
				'password_recovery' => sha1(sha1(sha1(md5(md5(md5($recovery)))))),
				),'email',$this->input->post('email')
				);
		   
                   $this->session->set_flashdata('sukses','sukses');
		   $this->session->set_userdata('email',$this->input->post('email'));
		   
		    //$config = Array(
		  //  'protocol' => 'smtp',
		  //  'smtp_host' => 'smtp.googlemail.com',
		  //  'smtp_port' => 587, // port untuk tls
		  //  'smtp_user' => 'aldiferdiyan@gmail.com', // akun gmail anda yg akan digunakan untuk mengirimkan email
		  //  'smtp_pass' => 'nungaldi', // password akun gmail anda
		  //  'mailtype'  => 'html', 
		  //  'charset'   => 'utf-8',
		  //  'smtp_crypto' => 'tls' // tls atau ssl 
		  //);
		  //  
		     $this->load->library('email' /*, $config*/);
	       
		    $message =  "
		    Berikut adalah recovery password akun anda: <br>
		    <b>$recovery</b><br><br>
		    perlu kami beritahukan bahwa recovery password ini bersifat case sensitive,<br>
		    jadi di mohon untuk para member memperhatikan huruf besar dan kecil <br><br>
		    
		    <br>
		    - Ancient Game
		    ";
	    
		    $this->email->set_newline("\r\n");
		    $this->email->from('support@infonindo.com','Ancient Game');
		    $this->email->to($this->input->post('email'));
		    $this->email->subject('Recovery Password AncientGame');
		    $this->email->message($message);
		    $this->email->send();
		    
		   
                   redirect('lupa_password');
                }
    }
    
    function check_email($data)
    {
        $check = core::get_where('mb_member','member',array('email' => $data),1);
	if($check->num_rows() == 0)
	{
	    $this->form_validation->set_message('check_email', '%s Tidak terdaftar dalam database kami');
	    return FALSE;
	}
	else
	{
	    return TRUE;
	}
    }
    
   
    
    
}