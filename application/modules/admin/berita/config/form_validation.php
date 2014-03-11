<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'intro_content',
							       'label' => 'intro content',
							       'rules' => 'xss_clean|',
					 ),
 					 array(
							       'field' => 'content',
							       'label' => 'content',
							       'rules' => '',
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
                                          
					
 					 array(
							       'field' => 'status',
							       'label' => 'status',
							       'rules' => 'required|xss_clean|',
					 ),
 					 array(
							       'field' => 'category_id',
							       'label' => 'category id',
							       'rules' => 'required|xss_clean|',
					 ),
				 ),
		'update' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'intro_content',
							       'label' => 'intro content',
							       'rules' => 'xss_clean|',
					 ),
 					 array(
							       'field' => 'content',
							       'label' => 'content',
							       'rules' => '',
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

 					 array(
							       'field' => 'status',
							       'label' => 'status',
							       'rules' => 'required|xss_clean|',
					 ),
 					 array(
							       'field' => 'category_id',
							       'label' => 'category id',
							       'rules' => 'required|xss_clean|',
					 ),
				 ),

                                         
               );