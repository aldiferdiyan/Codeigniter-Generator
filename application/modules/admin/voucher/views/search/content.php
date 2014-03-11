<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<?php
if($this->uri->segment(3) == 'rows')
{
 $rows =  "voucher/search/rows/".$this->uri->segment(4);
}
else
{
 $rows =  "voucher/search";
}
?>
<form action='<?php echo base_url($rows);?>' method='get'>

<input class="span9" type="text" name='search'>                   
<select name='search_by' style='width:100px;'>
<option value='voucher_code' <?php echo $this->input->get('search_by') == 'voucher_code' ? 'selected' : '' ;?>>voucher code</option>
<option value='nilai' <?php echo $this->input->get('search_by') == 'nilai' ? 'selected' : '' ;?>>nilai</option>
<option value='status' <?php echo $this->input->get('search_by') == 'status' ? 'selected' : '' ;?>>status</option>

</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('voucher/search/rows/25');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">25 Rows</option>
<option value="<?php echo base_url('voucher/search/rows/50');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">50 Rows</option>
<option value="<?php echo base_url('voucher/search/rows/75');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">75 Rows</option>
<option value="<?php echo base_url('voucher/search/rows/100');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">100 Rows</option>
<option value="<?php echo base_url('voucher/search/rows/200');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">200 Rows</option>
</select>
 
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'voucher/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'voucher/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_search('ac_voucher','ancient',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('voucher');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>voucher code</th>
<th>nilai</th>
<th>status</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->input->get('offset') + 1;?>
<?php foreach(core::get_search_pagination('ac_voucher','ancient',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td><?php echo core::voucher($row->voucher_code) ;?></td>
			<td><?php echo $row->nilai ;?></td>
			<td><?php echo $row->status ;?></td>
			<td>
		    <center><div class='btn-group' >
		    <a href='<?php echo base_url();?>voucher/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus data ini??'><i class='text-error fa fa-trash-o'></i></a>
                     <a href='<?php echo base_url();?>voucher/detail/<?php echo $row->id;?>' class='btn btn-small'><i class='text-info fa fa-weibo'></i></a>
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