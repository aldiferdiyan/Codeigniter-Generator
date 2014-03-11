<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends Sitecore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('daftar_model','model');
    }
    
   
    /* METHOD "CREATE"
     * berfungsi untuk membuat / insert data ke dalam database
     */
    function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-error">*', '</p>');  
 

        if ($this->form_validation->run('create') == FALSE)
        {
	    $this->load->helper('captcha');
            $vals = array(
                'word'           => $this->RandomString(3),
                'img_path'	 => './wdc-assets/captcha/',
                'img_url'	 => base_url().'wdc-assets/captcha/',
                'font_path'      => './system/fonts/centuri.otf',
                'img_width'	 => '350',
                'img_height'     => 80,
                'border'         => 0, 
                'expiration'     => 7200
            );
            // create captcha image
            $cap = create_captcha($vals);
            // store image html code in a variable
            $data['image'] = $cap['image'];
            // store the captcha word in a session
            $this->session->set_userdata('captcha', $cap['word']);
	    
	    $data['_sidebar'] = $this->load->view('/_layouts/_sidebar','',TRUE);
            $data['include'] =   $this->load->view('/create/include',$data,TRUE);
            $data['content'] =   $this->load->view('/create/content',$data,TRUE);
            $this->load->view("site/main",$data);
        }
        else
        {
	    $password    = sha1(sha1(sha1(md5(md5(md5($this->input->post('password')))))));
	    $code = sha1(sha1(sha1(md5(md5(md5(uniqid($this->input->post('password'),TRUE)))))));
	    $unique_code = substr($code,0,16);
            core::insert('mb_member','member',array(
				'username' => $this->input->post('username'),
				'password' => $password,
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'unique_code' => $unique_code,
				'no_telepon' => $this->input->post('no_telepon'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tgl_lahir' => $this->input->post('tahun')."-".$this->input->post('bulan')."-".$this->input->post('tanggal'),
				'created'   => date("Y-m-d H:i:s"),
				));
	  
	    $this->load->library('email');
	    $message =  "Aktifkan segera akun anda dengan cara klik link di bawah ini atau <br>
	    copy kemudian paste ke browser anda : <br><br>
	    
	    <a href='".base_url('daftar/activated')."/".$unique_code."' target='_blank'>".base_url('daftar/activated')."/".$unique_code."</a>
	    <br><br>
	    Pemberitahuan kepada para member, dengan mengaktifkan akun, member dapat menggunakan fitur<br>
	    fitur yg berada di ancient game";
    
	    $this->email->set_newline("\r\n");
	    $this->email->from('support@infonindo.com','Ancient Game');
	    $this->email->to($this->input->post('email'));
	    $this->email->subject('Pengaktifkan akun');
	    $this->email->message($message);
	    $this->email->send();
	    
            redirect('daftar/success');
        }
    }
    
    function success()
    {
	$this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-error">*', '</p>');  
 

        if ($this->form_validation->run('create') == FALSE)
        {
	    $data['_sidebar'] = $this->load->view('/_layouts/_sidebar','',TRUE);
	    $data['include'] =   $this->load->view('/success/include','',TRUE);
            $data['content'] =   $this->load->view('/success/content',$data,TRUE);
            $this->load->view("site/main",$data);
	}
	else
	{
	    redirect('member');
	}
	
    }
    
    function check_username($data)
    {
	$check = core::get_where('mb_member','member',array('username' => $data),1);
	if($check->num_rows() > 0)
	{
	    $this->form_validation->set_message('check_username', '%s Sudah di gunakan, silakan gunakan ID lain');
	    return FALSE;
	}
	else
	{
	    return TRUE;
	}
    }
    
    function check_email($data)
    {
	$check = core::get_where('mb_member','member',array('email' => $data),1);
	if($check->num_rows() > 0)
	{
	    $this->form_validation->set_message('check_email', '%s Sudah di gunakan, silakan gunakan Email lain');
	    return FALSE;
	}
	else
	{
	    return TRUE;
	}
    }
    
    function captcha_check($str)
	{
		if ($str != $this->session->userdata('captcha'))
		{
			$this->form_validation->set_message('captcha_check', 'Wrong %s');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
        
   private function RandomString($length = 3)
   {
        $characters = '0123456789';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    function activated()
    {
	 core::update_where('mb_member','member',array(
				'status'        => 'active',
				'activated'     => '1',
				'activated_date'=> date("Y-m-d H:i:s"),
				),'unique_code',$this->uri->segment(3));
	  
	 $this->load->view('activated');
    }
    
    //AJAX METHOD
    function ajax_check_username()
    {
	$query = core::get_where('mb_member','member',array('username' => $this->input->get('username')),1);
        $row = $query->num_rows();
	if($row > 0)
	{
	    echo "false";
	}
	else
	{
	    echo "true";
	}
    }
    function ajax_check_email()
    {
	$query = core::get_where('mb_member','member',array('email' => $this->input->get('email')),1);
        $row = $query->num_rows();
	if($row > 0)
	{
	    echo "false";
	}
	else
	{
	    echo "true";
	}
    }
    
}




