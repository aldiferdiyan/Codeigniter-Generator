<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_keyword',
							       'label' => 'meta keyword',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_desc',
							       'label' => 'meta desc',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),
		'update' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_keyword',
							       'label' => 'meta keyword',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'meta_desc',
							       'label' => 'meta desc',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),

                                         
               );