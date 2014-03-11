<?php
$config = array(
  
            'create' => array(
 					 array(
							       'field' => 'order_code',
							       'label' => 'order code',
							       'rules' => 'required|trim|xss_clean|is_unique[sp_order.order_code]|',
					 ),
 					 array(
							       'field' => 'voucher',
							       'label' => 'voucher',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'jumlah',
							       'label' => 'jumlah',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'harga',
							       'label' => 'harga',
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
				 ),
		'update' => array(
 					 array(
							       'field' => 'order_code',
							       'label' => 'order code',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'voucher',
							       'label' => 'voucher',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'jumlah',
							       'label' => 'jumlah',
							       'rules' => 'required|trim|xss_clean|',
					 ),
 					 array(
							       'field' => 'harga',
							       'label' => 'harga',
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
				 ),

                                         
               );