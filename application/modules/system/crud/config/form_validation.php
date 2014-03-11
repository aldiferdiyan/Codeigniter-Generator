<?php
$config = array(
        'validation' => array(
 		array(
		    'field' => 'title',
		    'label' => 'Title',
		    'rules' => 'required|trim|xss_clean|',
		    ),
 		array(
		    'field' => 'date',
		    'label' => 'Date',
		    'rules' => 'required|trim|xss_clean|',
		    ),
            ),
        );