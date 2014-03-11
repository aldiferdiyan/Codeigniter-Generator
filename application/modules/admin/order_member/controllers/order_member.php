<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_member extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('order_member_model','model');
	core::update_where('mb_order','member',array('new_coming' => 0),'new_coming','1');
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
//    
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
//            core::insert('sp_order','shop',array(
//				'order_code' => $this->input->post('order_code'),
//				'voucher' => $this->input->post('voucher'),
//				'jumlah' => $this->input->post('jumlah'),
//				'harga' => $this->input->post('harga'),
//				'created' => $this->input->post('created'),
//				'status' => $this->input->post('status'),
//				));
//            redirect('order_member');
//        }
//    }
//
//
  
    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update($id = '',$jumlah = '',$member_id = '',$voucher = '',$status = '',$order_code = '')
    {
        if($status == 'paid')
        {
            core::update('mb_order','member',array(
				'status' => $status,
                                'modified' => date('Y-m-d H:i:s'),
	    ),$id);
            
            for($i = 1;$i <= $jumlah;$i++ ){
                $create = strtoupper(uniqid(sha1(sha1(sha1(sha1(sha1(sha1(md5(md5(md5(md5(md5(md5(md5(md5(md5(md5(uniqid(date('YmdHis'),true))))))))))))))))))); 
                $code = substr($create,0,24);
                
                $query = core::get_where('ac_voucher','ancient',array('voucher_code' => $code),1);
                
                if($query->num_rows() > 0)
                {
                    $create2 = strtoupper(uniqid(sha1(sha1(sha1(sha1(sha1(sha1(md5(md5(md5(md5(md5(md5(md5(md5(md5(md5(uniqid(date('YmdHis'),true))))))))))))))))))); 
                    $code2 = substr($create2,0,24);
                    $query2 = core::get_where('ac_voucher','ancient',array('voucher_code' => $code2),1);
                    
                    if($query2->num_rows() > 0)
                    {
                        foreach(core::get_all('ac_voucher','ancient',1)->result() as $row) {
                            $create3 = strtoupper(uniqid(sha1(sha1(sha1(sha1(sha1(sha1(md5(md5(md5(md5(md5(md5(md5(md5(md5(md5(uniqid(date('YmdHis'),true))))))))))))))))))); 
                            $last_id = $row->id + 1;
                            $create_id = $last_id.$create3;
                            $code3 = substr($create_id,0,24);
                            
                            core::insert('ac_voucher','ancient',array(
                                            'voucher_code'=> $code3,
                                            'member_id' => $member_id,
                                            'nilai'     => $voucher,
                                            'order_id'  => $id,
                                            'created'   => date("Y-m-d H:i:s"),
                            ));
                        }
                    }
                    else
                    {
                        core::insert('ac_voucher','ancient',array(
                                            'voucher_code'=> $code2,
                                            'member_id' => $member_id,
                                            'nilai'     => $voucher,
                                            'order_id'  => $id,
                                            'created'   => date("Y-m-d H:i:s"),
                        ));
                    }
                }
                else
                {
                    core::insert('ac_voucher','ancient',array(
                                        'voucher_code'  => $code,
                                        'member_id'     => $member_id,
                                        'nilai'         => $voucher,
                                        'order_id'      => $id,
                                        'created'       => date("Y-m-d H:i:s"),
                    ));
                }
                
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        elseif($status == 'unpaid')
        {
            core::update('mb_order','member',array(
				'status' => $status,
	    ),$id);
             
            core::delete_code('ac_voucher','ancient',$id);
             
            header("Location: " . $_SERVER['HTTP_REFERER']);
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
        core::delete('mb_order','member',$id);
        redirect('order_member');
    }
    
    
}