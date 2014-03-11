<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Controller {

        function index()
	{
	    $this->load->dbutil();
	    $this->load->library('form_validation');
            $this->form_validation->CI =& $this;
            $this->form_validation->set_error_delimiters('<p class="text-error">*', '</p>');  
            $this->form_validation->set_rules('model','model','required');
            
            if ($this->form_validation->run() == FALSE)
            {
		$data['content'] = $this->load->view('/model/content','',TRUE);
                $this->load->view("/_layouts",$data);
            }
            else
            {
		$name     = $this->input->post('model');
		$class    = ucfirst($this->input->post('model'));
		$database = $this->input->post('database');
		$table    = $this->input->post('table');
		
                $path    = "application/models/";
		
		// generate controller
		$this->create_file(array(
				'file_get_content'  => 'template/models/model.php',
				'get_array'         => array('{PHPTAG}','{name}','{class}','{table}','{database}','{date}'),
				'put_array'         => array('<?php',$name,$class,$table,$database,date('l j M Y H:i:s')),
				'file_put_content'  => $path.$name.".php",
			));
	        $this->session->set_flashdata('sukses','berhasil generate');
		redirect('generator/model');
            }
	}
	
	// HELP METHOD
	private function create_file($args = array())
	{
		$get_content = file_get_contents($args['file_get_content']);
                $get = $args['get_array'];
                $put = $args['put_array'];
		$replace = str_replace($get, $put, $get_content);
		$file    = $args['file_put_content'];
                file_put_contents($file,$replace);
	}
	
	 
}