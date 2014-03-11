<?php
$config = array(
  
		'update' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 
 					 array(
							       'field' => 'content',
							       'label' => 'content',
							       'rules' => '',
					 ),
 					 array(
							       'field' => 'credit_image',
							       'label' => 'credit image',
							       'rules' => 'xss_clean|',
					 ),
 					 array(
							       'field' => 'image',
							       'label' => 'image',
							       'rules' => 'trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'created',
							       'label' => 'created',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'created_by',
							       'label' => 'created by',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'created_alias',
							       'label' => 'created alias',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_key',
							       'label' => 'meta key',
							       'rules' => 'xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_desc',
							       'label' => 'meta desc',
							       'rules' => 'xss_clean|',
					 ),
				 ),

                                         
               );