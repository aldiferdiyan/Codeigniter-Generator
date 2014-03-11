<div class='row-fluid'>
<div class="span12">
    
    
<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<form action='<?php echo base_url('member/search');?>' method='get'>
<input class="span9" type="text" name='search'>                   
<select name='search_by' style='width:100px;'>
<option value='username' >username</option>
<option value='email' >email</option>
<option value='no_telepon' >no telepon</option>
 

</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('member/index/rows/25');?>">25 Rows</option>
<option value="<?php echo base_url('member/index/rows/50');?>">50 Rows</option>
<option value="<?php echo base_url('member/index/rows/75');?>">75 Rows</option>
<option value="<?php echo base_url('member/index/rows/100');?>">100 Rows</option>
<option value="<?php echo base_url('member/index/rows/200');?>">200 Rows</option>
</select>
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'member/index/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'member/index';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_all('mb_member','member')->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>username</th>
<th>email</th>
<th>no telepon</th>
<th>status</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->uri->segment($segment) + 1;?>
<?php foreach(core::get_all_pagination('mb_member','member',$per_page,$segment,$url)->result() as $row): { ?><tr>
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
			<td><?php echo $row->no_telepon ;?></td>
                        <td>
                        <?php if($row->status == 'inactive'){ ?>
                        <label class='label'><?php echo $row->status;?></label>
                        <?php } elseif ($row->status == 'active') { ?>
                        <label class='label label-success'><?php echo $row->status;?></label>
                        <?php } else { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } ?>
                        </td>
			<td>
		     <center><div class='btn-group' >
                    <?php if($row->status == 'banned'){ ?>
                     <a href='<?php echo base_url();?>member/update/<?php echo $row->id;?>/activated_date/active' class='btn btn-small' data-confirm='active akun ini?'><i class='fa fa-check'></i> Active</a>
                    <?php } else if ($row->status == 'active') { ?>
                     <a href='<?php echo base_url();?>member/update/<?php echo $row->id;?>/banned_date/banned' class='btn btn-small' data-confirm='banned akun ini?'><i class='fa fa-times'></i> Banned</a>
		   <?php } else { } ?>
                    <a href='<?php echo base_url();?>member/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='hapus akun ini permanent?'><i class='text-error fa fa-trash-o'></i></a>
                     <a href='<?php echo base_url();?>member/detail/<?php echo $row->id;?>' class='btn btn-small'><i class='text-info fa fa-weibo'></i></a>
                    </div></center>
                    </td>
		   
		   
</tr>
<?php } ?>
<?php $i++;?>
<?php endforeach;?>
</tbody>
</table>
</div>

    
      <?php echo $this->pagination->create_links(); ?>
        
  
</div>
</div>