<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<?php
if($this->uri->segment(3) == 'rows')
{
 $rows =  "reseller/search/rows/".$this->uri->segment(4);
}
else
{
 $rows =  "reseller/search";
}
?>
<form action='<?php echo base_url($rows);?>' method='get'>

<input class="span9" type="text" name='search'>                   
<select name='search_by' style='width:100px;'>
<option value='id' <?php echo $this->input->get('search_by') == 'id' ? 'selected' : '' ;?>>id</option>
<option value='nama' <?php echo $this->input->get('search_by') == 'nama' ? 'selected' : '' ;?>>nama</option>
<option value='balance' <?php echo $this->input->get('search_by') == 'balance' ? 'selected' : '' ;?>>balance</option>
<option value='username' <?php echo $this->input->get('search_by') == 'username' ? 'selected' : '' ;?>>username</option>
<option value='email' <?php echo $this->input->get('search_by') == 'email' ? 'selected' : '' ;?>>email</option>
<option value='no_telepon' <?php echo $this->input->get('search_by') == 'no_telepon' ? 'selected' : '' ;?>>no telepon</option>
<option value='modified' <?php echo $this->input->get('search_by') == 'modified' ? 'selected' : '' ;?>>modified</option>

</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('reseller/search/rows/25');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">25 Rows</option>
<option value="<?php echo base_url('reseller/search/rows/50');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">50 Rows</option>
<option value="<?php echo base_url('reseller/search/rows/75');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">75 Rows</option>
<option value="<?php echo base_url('reseller/search/rows/100');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">100 Rows</option>
<option value="<?php echo base_url('reseller/search/rows/200');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">200 Rows</option>
</select>
 
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'reseller/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'reseller/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_search('rs_reseller','reseller',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('reseller');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>username</th>
<th>balance</th>
<th>email</th>
<th>no telepon</th>
<th>status</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->input->get('offset') + 1;?>
<?php foreach(core::get_search_pagination('rs_reseller','reseller',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
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
                        <td><?php echo $row->balance;?></td>
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
                     <a href='<?php echo base_url();?>reseller/update/<?php echo $row->id;?>/activated_date/active' class='btn btn-small' data-confirm='active akun ini?'><i class='fa fa-check'></i> Active</a>
                    <?php } else if ($row->status == 'active') { ?>
                     <a href='<?php echo base_url();?>reseller/update/<?php echo $row->id;?>/banned_date/banned' class='btn btn-small' data-confirm='banned akun ini?'><i class='fa fa-times'></i> Banned</a>
		   <?php } else { } ?>
                    <a href='<?php echo base_url();?>reseller/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='hapus akun ini permanent?'><i class='text-error fa fa-trash-o'></i></a>
                     <a href='<?php echo base_url();?>reseller/detail/<?php echo $row->id;?>' class='btn btn-small'><i class='text-info fa fa-weibo'></i></a>
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