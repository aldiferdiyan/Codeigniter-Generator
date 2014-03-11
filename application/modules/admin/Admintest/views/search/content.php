<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<?php
if($this->uri->segment(3) == 'rows')
{
 $rows =  "Admintest/search/rows/".$this->uri->segment(4);
}
else
{
 $rows =  "Admintest/search";
}
?>
<form action='<?php echo base_url($rows);?>' method='get'>

<input class="span9" type="text" name='search'>                   
<select name='search_by' style='width:100px;'>
<option value='title' <?php echo $this->input->get('search_by') == 'title' ? 'selected' : '' ;?>>title</option>
<option value='intro_content' <?php echo $this->input->get('search_by') == 'intro_content' ? 'selected' : '' ;?>>intro content</option>
<option value='content' <?php echo $this->input->get('search_by') == 'content' ? 'selected' : '' ;?>>content</option>
<option value='credit_image' <?php echo $this->input->get('search_by') == 'credit_image' ? 'selected' : '' ;?>>credit image</option>
<option value='image' <?php echo $this->input->get('search_by') == 'image' ? 'selected' : '' ;?>>image</option>
<option value='created' <?php echo $this->input->get('search_by') == 'created' ? 'selected' : '' ;?>>created</option>
<option value='created_by' <?php echo $this->input->get('search_by') == 'created_by' ? 'selected' : '' ;?>>created by</option>
<option value='created_alias' <?php echo $this->input->get('search_by') == 'created_alias' ? 'selected' : '' ;?>>created alias</option>
<option value='modified' <?php echo $this->input->get('search_by') == 'modified' ? 'selected' : '' ;?>>modified</option>
<option value='modified_by' <?php echo $this->input->get('search_by') == 'modified_by' ? 'selected' : '' ;?>>modified by</option>
<option value='modified_alias' <?php echo $this->input->get('search_by') == 'modified_alias' ? 'selected' : '' ;?>>modified alias</option>
<option value='meta_key' <?php echo $this->input->get('search_by') == 'meta_key' ? 'selected' : '' ;?>>meta key</option>
<option value='meta_desc' <?php echo $this->input->get('search_by') == 'meta_desc' ? 'selected' : '' ;?>>meta desc</option>
<option value='hits' <?php echo $this->input->get('search_by') == 'hits' ? 'selected' : '' ;?>>hits</option>
<option value='status' <?php echo $this->input->get('search_by') == 'status' ? 'selected' : '' ;?>>status</option>
<option value='category_id' <?php echo $this->input->get('search_by') == 'category_id' ? 'selected' : '' ;?>>category id</option>

</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('Admintest/search/rows/25');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">25 Rows</option>
<option value="<?php echo base_url('Admintest/search/rows/50');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">50 Rows</option>
<option value="<?php echo base_url('Admintest/search/rows/75');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">75 Rows</option>
<option value="<?php echo base_url('Admintest/search/rows/100');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">100 Rows</option>
<option value="<?php echo base_url('Admintest/search/rows/200');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">200 Rows</option>
</select>
 
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'Admintest/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'Admintest/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_search('ac_berita','ancient',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('Admintest');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>title</th>
<th>intro content</th>
<th>content</th>
<th>credit image</th>
<th>image</th>
<th>created</th>
<th>created by</th>
<th>created alias</th>
<th>modified</th>
<th>modified by</th>
<th>modified alias</th>
<th>meta key</th>
<th>meta desc</th>
<th>hits</th>
<th>status</th>
<th>category id</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->input->get('offset') + 1;?>
<?php foreach(core::get_search_pagination('ac_berita','ancient',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td><?php echo $row->title ;?></td>
			<td><?php echo $row->intro_content ;?></td>
			<td><?php echo $row->content ;?></td>
			<td><?php echo $row->credit_image ;?></td>
			<td><?php echo $row->image ;?></td>
			<td><?php echo $row->created ;?></td>
			<td><?php echo $row->created_by ;?></td>
			<td><?php echo $row->created_alias ;?></td>
			<td><?php echo $row->modified ;?></td>
			<td><?php echo $row->modified_by ;?></td>
			<td><?php echo $row->modified_alias ;?></td>
			<td><?php echo $row->meta_key ;?></td>
			<td><?php echo $row->meta_desc ;?></td>
			<td><?php echo $row->hits ;?></td>
			<td><?php echo $row->status ;?></td>
			<td><?php echo $row->category_id ;?></td>
			<td>
		    <center><div class='btn-group' >
		    <a href='<?php echo base_url();?>Admintest/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus data ini??'><i class='text-error fa fa-trash-o'></i></a>
                    <a href='<?php echo base_url();?>Admintest/update/<?php echo $row->id;?>' class='btn   btn-small'><i class='text-warning fa fa-edit'></i></a>
                    <a href='<?php echo base_url();?>Admintest/detail/<?php echo $row->id;?>' class='btn btn-small'><i class='text-info fa fa-weibo'></i></a>
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