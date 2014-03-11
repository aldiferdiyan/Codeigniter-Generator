<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_model
{
    function __construct()
    {
         date_default_timezone_set("Asia/Jakarta");
         parent::__construct();
        
    }
    
    function check_login($username,$password_encrypt)
    {
        $db = $this->load->database('member',TRUE);
        $where_username = array('username' => $username, 'password' => $password_encrypt);
        $where_pass_recovery = array('username' => $username, 'password_recovery' => $password_encrypt);
        
        $db->where($where_username);
        $db->or_where($where_pass_recovery);
        $query = $db->get('mb_member',1);
        
        return $query;
    }
    
    function update_member($username,$password_encrypt)
    {
        $db = $this->load->database('member',TRUE);
        $data = array(
            'last_ip'     => $this->input->ip_address(),
            'last_login'  => date('Y-m-d H:i:s'),
            'online'      => '1',
        );
        
        $where_username = array('username' => $username, 'password' => $password_encrypt);
         
        $db->where($where_username);
        
        
        $db->update('mb_member', $data); 
    }
}