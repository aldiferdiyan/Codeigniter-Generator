<?php
$config = array(
  
            'create' => array(
 					 array(
			                       'field' => 'username',
			                       'label' => 'username ID',
			                       'rules' => 'required|trim|xss_clean|min_length[4]|max_length[15]|htmlspecialchars|callback_check_username',
					 ),
 					 array(
			                       'field' => 'password',
			                       'label' => 'password',
			                       'rules' => 'required|trim|xss_clean|matches[password_konfirmasi]|min_length[4]|max_length[15]|htmlspecialchars',
					 ),
                                          array(
			                       'field' => 'password_konfirmasi',
			                       'label' => 'konfirmasi password',
			                       'rules' => 'required|trim|xss_clean|matches[password]|min_length[4]|max_length[15]|htmlspecialchars',
					 ),
 					 array(
			                       'field' => 'email',
			                       'label' => 'email',
			                       'rules' => 'required|trim|valid_email|xss_clean|htmlspecialchars|callback_check_email',
					 ),
                                          array(
			                       'field' => 'nama',
			                       'label' => 'nama',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
                                           array(
			                       'field' => 'no_telepon',
			                       'label' => 'No Telepon',
			                       'rules' => 'required|trim|xss_clean|numeric|htmlspecialchars',
					 ),
 					 array(
			                       'field' => 'jenis_kelamin',
			                       'label' => 'Jenis Kelamin',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
 					 array(
			                       'field' => 'tanggal',
			                       'label' => 'tanggal',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
                                          array(
			                       'field' => 'bulan',
			                       'label' => 'bulan',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
                                           array(
			                       'field' => 'tahun',
			                       'label' => 'tahun',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
                                             array(
			                       'field' => 'persetujuan',
			                       'label' => 'persetuan reseller',
			                       'rules' => 'required|trim|xss_clean|htmlspecialchars',
					 ),
                                              array(
			                       'field' => 'security_code',
			                       'label' => 'Security Code',
			                       'rules' => 'required|xss_clean|trim|htmlspecialchars|callback_captcha_check',
					 ),
				 ),
		
               );