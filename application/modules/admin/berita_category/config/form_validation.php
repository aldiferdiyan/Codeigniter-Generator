<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'category',
							       'label' => 'category',
							       'rules' => 'required|trim|xss_clean|is_unique[ac_category.category]|',
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
							       'field' => 'created_by_alias',
							       'label' => 'created by alias',
							       'rules' => 'trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'image',
							       'label' => 'image',
							       'rules' => 'trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'credit_image',
							       'label' => 'credit image',
							       'rules' => 'trim|xss_clean|',
					 ),
				 ),
		'update' => array(
 					 array(
							       'field' => 'category',
							       'label' => 'category',
							       'rules' => 'required|trim|xss_clean|',
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
							       'field' => 'created_by_alias',
							       'label' => 'created by alias',
							       'rules' => 'trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'image',
							       'label' => 'image',
							       'rules' => 'trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'credit_image',
							       'label' => 'credit image',
							       'rules' => 'trim|xss_clean|',
					 ),
				 ),

                                         
               );