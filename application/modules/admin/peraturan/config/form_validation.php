<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'title',
							       'label' => 'title',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'content',
							       'label' => 'content',
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
							       'field' => 'content',
							       'label' => 'content',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),

                                         
               );