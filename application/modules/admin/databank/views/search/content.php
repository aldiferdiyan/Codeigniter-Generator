<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>

 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'databank/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'databank/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_search('ac_databank','ancient',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('databank');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>bank</th>
<th>atas nama</th>
<th>no rek</th>
<th>cabang</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->input->get('offset') + 1;?>
<?php foreach(core::get_search_pagination('ac_databank','ancient',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td><?php echo $row->bank ;?></td>
			<td><?php echo $row->atas_nama ;?></td>
			<td><?php echo $row->no_rek ;?></td>
			<td><?php echo $row->cabang ;?></td>
			<td>
		    <center><div class='btn-group' >
		    <a href='<?php echo base_url();?>databank/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus data ini??'><i class='text-error fa fa-trash-o'></i></a>
                    <a href='<?php echo base_url();?>databank/update/<?php echo $row->id;?>' class='btn   btn-small'><i class='text-warning fa fa-edit'></i></a>
                    <a href='<?php echo base_url();?>databank/detail/<?php echo $row->id;?>' class='btn btn-small'><i class='text-info fa fa-weibo'></i></a>
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