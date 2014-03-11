
<blockquote><h4>Dashboard</h4></blockquote><hr>
<div class='row' style='margin-left: 0px;'>
<div class='span6'>
<blockquote><h5>Order Voucher</h5></blockquote><br>
<div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<thead>
<tr>
<th style='width:20px;'>No</th>
<th>order code</th>
<th>status</th>
</tr></thead>
<tbody>
 <?php $i = 1;?>
<?php foreach(core::get_all('mb_order','member',5)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td>
                        <?php echo $row->order_code ;?><br>
                        <small class='muted'>on <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        </td>
			  <td>
                         <?php if($row->status == 'unpaid') { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } else { ?>
                         <label class='label label-success'><?php echo $row->status;?></label>
                        <?php }?>
                        </td>
		 
		   
</tr>
<?php } ?>
<?php $i++;?>
<?php endforeach;?>
</tbody>
</table>
</div>
</div>

<div class='span6'>
 <blockquote><h5>Order Balance</h5></blockquote><hr>
<div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<thead>
<tr>
<th style='width:20px;'>No</th>
<th>order code</th>
<th>status</th>
</tr></thead>
<tbody>
 <?php $i = 1;?>
<?php foreach(core::get_all('rs_order','reseller',5)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td>
                        <?php echo $row->order_code ;?><br>
                        <small class='muted'>on <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        </td>
			  <td>
                         <?php if($row->status == 'unpaid') { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } else { ?>
                         <label class='label label-success'><?php echo $row->status;?></label>
                        <?php }?>
                        </td>
		 
		   
</tr>
<?php } ?>
<?php $i++;?>
<?php endforeach;?>
</tbody>
</table>
</div>
</div>

</div>

 <blockquote><h5>Member</h5></blockquote><hr>
<div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<thead>
<tr>
<th style='width:20px;'>No</th>
<th>Username</th>
<th>Email</th>
<th>status</th>
</tr></thead>
<tbody>
 <?php $i = 1;?>
<?php foreach(core::get_all('mb_member','member',5)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td>
                        <?php echo $row->username ;?><br>
                        <?php if($row->status == 'inactive'){ ?>
                        <small class='muted'>Mendaftar pada : <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        <?php } elseif ($row->status == 'active') { ?>
                        <small class='muted'>Aktif pada : <?php echo date("l, d F Y - H:i",strtotime($row->activated_date));?> WIB</small>
                        <?php } else { ?>
                        <small class='muted'>Banned pada : <?php echo date("l, d F Y - H:i",strtotime($row->banned_date));?> WIB</small>
                        <?php } ?>
                        </td>
                        
			<td><?php echo $row->email ;?></td>
			 <td>
                        <?php if($row->status == 'inactive'){ ?>
                        <label class='label'><?php echo $row->status;?></label>
                        <?php } elseif ($row->status == 'active') { ?>
                        <label class='label label-success'><?php echo $row->status;?></label>
                        <?php } else { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } ?>
                        </td>
		   
</tr>
<?php } ?>
<?php $i++;?>
<?php endforeach;?>
</tbody>
</table>
</div>



 <blockquote><h5>Member</h5></blockquote><hr>
<div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<thead>
<tr>
<th style='width:20px;'>No</th>
<th>Username</th>
<th>Email</th>
<th>status</th>
</tr></thead>
<tbody>
 <?php $i = 1;?>
<?php foreach(core::get_all('rs_reseller','reseller',5)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td>
                        <?php echo $row->username ;?><br>
                        <?php if($row->status == 'inactive'){ ?>
                        <small class='muted'>Mendaftar pada : <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        <?php } elseif ($row->status == 'active') { ?>
                        <small class='muted'>Aktif pada : <?php echo date("l, d F Y - H:i",strtotime($row->activated_date));?> WIB</small>
                        <?php } else { ?>
                        <small class='muted'>Banned pada : <?php echo date("l, d F Y - H:i",strtotime($row->banned_date));?> WIB</small>
                        <?php } ?>
                        </td>
                        
			<td><?php echo $row->email ;?></td>
			 <td>
                        <?php if($row->status == 'inactive'){ ?>
                        <label class='label'><?php echo $row->status;?></label>
                        <?php } elseif ($row->status == 'active') { ?>
                        <label class='label label-success'><?php echo $row->status;?></label>
                        <?php } else { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } ?>
                        </td>
		   
</tr>
<?php } ?>
<?php $i++;?>
<?php endforeach;?>
</tbody>
</table>
</div>
