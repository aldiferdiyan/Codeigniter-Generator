<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ubah_password_model extends CI_model
{
     function __construct()
    {
        parent::__construct();
    }

    function check_password($password_encrypt)
    {
        $db = $this->load->database('member',TRUE);
        $where_pass = array('password' => $password_encrypt);
        $where_pass_recovery = array('password_recovery' => $password_encrypt);
        
        $db->where($where_pass);
        $db->or_where($where_pass_recovery);
        $query = $db->get('mb_member',1);
        
        return $query;
    }
    
}