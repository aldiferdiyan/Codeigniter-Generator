<?php
$config = array(
  
            'create' => array(
 					
 					 array(
							       'field' => 'username',
							       'label' => 'username',
							       'rules' => 'required|trim|xss_clean|is_unique[ac_admin.username]|',
					 ),
 					 array(
							       'field' => 'password',
							       'label' => 'password',
							       'rules' => 'required|trim|xss_clean|matches[password_conf]',
					 ),
                                         array(
							       'field' => 'password_conf',
							       'label' => 'konfirmasi password',
							       'rules' => 'required|trim|xss_clean|matches[password]',
					 ),
 					 array(
							       'field' => 'email',
							       'label' => 'email',
							       'rules' => 'required|trim|valid_email|xss_clean|is_unique[ac_admin.email]|',
					 ),
 					 array(
							       'field' => 'no_telepon',
							       'label' => 'no telepon',
							       'rules' => 'required|trim|xss_clean|numeric|',
					 ),
 					
 					 array(
							       'field' => 'status',
							       'label' => 'status',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					
				 ),
		'update' => array(
 					 array(
							       'field' => 'nama',
							       'label' => 'nama',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'username',
							       'label' => 'username',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					
 					 array(
							       'field' => 'email',
							       'label' => 'email',
							       'rules' => 'required|trim|valid_email|xss_clean|',
					 ),
 					 array(
							       'field' => 'no_telepon',
							       'label' => 'no telepon',
							       'rules' => 'required|trim|xss_clean|numeric|',
					 ),
 					 array(
							       'field' => 'tgl_lahir',
							       'label' => 'tgl lahir',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'jenis_kelamin',
							       'label' => 'jenis kelamin',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'created',
							       'label' => 'created',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'status',
							       'label' => 'status',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'avatar',
							       'label' => 'avatar',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'description',
							       'label' => 'description',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),

                                         
               );