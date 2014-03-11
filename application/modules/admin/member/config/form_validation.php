<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'nama',
							       'label' => 'nama',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'username',
							       'label' => 'username',
							       'rules' => 'required|trim|xss_clean|is_unique[mb_member.username]|',
					 ),
 					 array(
							       'field' => 'password',
							       'label' => 'password',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'email',
							       'label' => 'email',
							       'rules' => 'required|trim|valid_email|xss_clean|is_unique[mb_member.email]|',
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
							       'field' => 'password',
							       'label' => 'password',
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