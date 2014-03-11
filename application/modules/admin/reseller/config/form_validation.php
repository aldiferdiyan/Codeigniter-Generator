<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'id',
							       'label' => 'id',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'modified',
							       'label' => 'modified',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),
		'update' => array(
 					 array(
							       'field' => 'id',
							       'label' => 'id',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'modified',
							       'label' => 'modified',
							       'rules' => 'required|trim|xss_clean|',
					 ),
				 ),

                                         
               );