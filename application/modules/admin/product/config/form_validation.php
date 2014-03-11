<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'nama',
							       'label' => 'nama',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'nilai_voucher',
							       'label' => 'nilai voucher',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'harga',
							       'label' => 'harga',
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
							       'field' => 'nilai_voucher',
							       'label' => 'nilai voucher',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'harga',
							       'label' => 'harga',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					
				 ),

                                         
               );