<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends Core
{
    function __construct()
    {
        parent::__construct();
    }
    
    /* Read / manage all query */
    function index()
    {
        $data['include'] =   $this->load->view('/_include','',TRUE);
        $data['content'] =   $this->load->view('/admin',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
    /*  create query */
    function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters(' <p class="text-alert">', '</p>');  
        
        if ($this->form_validation->run('validation') == FALSE)
        {
            $data['include'] =   $this->load->view('/_include','',TRUE);
            $data['content'] =   $this->load->view('/create',$data,TRUE);
            $this->load->view("admin/main",$data);
        }
        else
        {
            crudmodel::insert(array(
                                'title' => $this->input->post('title'),    
                                'date'  => $this->input->post('date'),    
                                ));
            redirect('crud');
        }
    }
    
    /*  update query */
    function update($id = NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
        
        if ($this->form_validation->run('validation') == FALSE)
        {
            $data['id'] = $id;
            $data['include'] =   $this->load->view('/_include',$data,TRUE);
            $data['content'] =   $this->load->view('/update',$data,TRUE);
            $this->load->view("admin/main",$data);
        }
        else
        {
            crudmodel::update(array(
                                'title' => $this->input->post('title'),    
                                'date'  => $this->input->post('date'),    
                                ),$id);
            redirect('crud');
        }
    }
    
    /* read detail query */
    function detail($id = NULL)
    {
        $data['id'] = $id;
        $data['include'] =   $this->load->view('/_include',$data,TRUE);
        $data['content'] =   $this->load->view('/detail',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
    /*delete query */
    function delete()
    {
         $id = $this->input->post('id');
         $query = crudmodel::delete($id, 'id');
         if($query)
            echo "success";
         else
            echo "Failed";
    }
    
    /* get json data for read query [views/admin.php] with plugin datatable */
    function getJson()
    {
	$query = crudmodel::getJson(array('id' , 'title'), array('title'));
        echo json_encode($query);
    }
    
}