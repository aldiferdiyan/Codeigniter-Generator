<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminpanel_model extends CI_model
{
    function __construct()
    {
         date_default_timezone_set("Asia/Jakarta");
         parent::__construct();
        
    }
    
    function check_login($username_email,$password_encrypt)
    {
        $db = $this->load->database('ancient',TRUE);
        $where_username = array('username' => $username_email, 'password' => $password_encrypt);
        $where_email = array('email' => $username_email, 'password' => $password_encrypt);
        
        $db->where($where_username);
        $db->or_where($where_email);
        $query = $db->get('ac_admin',1);
        
        return $query;
    }
    
    function update_admin($username_email,$password_encrypt)
    {
        $db = $this->load->database('ancient',TRUE);
        $data = array(
            'last_ip'     => $this->input->ip_address(),
            'last_login'  => date('Y-m-d H:i:s'),
            'online'      => '1',
        );
        
        $where_username = array('username' => $username_email, 'password' => $password_encrypt);
        $where_email = array('email' => $username_email, 'password' => $password_encrypt);
        
        $db->where($where_username);
        $db->or_where($where_email);
        
        $db->update('ac_admin', $data); 
    }
}