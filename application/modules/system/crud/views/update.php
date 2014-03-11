<?php include('_head.php');?>

<form method='POST' action='' charset='UTF-8'>
 <?php $query = crudmodel::getWhere(array('id' => $id));?>
 <?php $row = $query->row();?>
 <?php include('_form.php');?>
</form>
 