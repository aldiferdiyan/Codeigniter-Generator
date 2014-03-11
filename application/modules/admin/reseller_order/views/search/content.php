<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<?php
if($this->uri->segment(3) == 'rows')
{
 $rows =  "reseller_order/search/rows/".$this->uri->segment(4);
}
else
{
 $rows =  "reseller_order/search";
}
?>
<form action='<?php echo base_url($rows);?>' method='get'>

<input class="span9" type="text" name='search' placeholder='order code ...' >                   
<select name='search_by' style='width:100px;'>
 <option value='order_code' <?php echo $this->input->get('search_by') == 'order_code' ? 'selected' : '' ;?>>order code</option>
 
</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('reseller_order/search/rows/25');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">25 Rows</option>
<option value="<?php echo base_url('reseller_order/search/rows/50');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">50 Rows</option>
<option value="<?php echo base_url('reseller_order/search/rows/75');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">75 Rows</option>
<option value="<?php echo base_url('reseller_order/search/rows/100');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">100 Rows</option>
<option value="<?php echo base_url('reseller_order/search/rows/200');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">200 Rows</option>
</select>
 
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'reseller_order/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'reseller_order/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_search('rs_order','reseller',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('reseller_order');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>balance</th>
<th>harga</th>
<th>order code</th>
<th>reseller</th>
<th>status</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->input->get('offset') + 1;?>
<?php foreach(core::get_join_search_pagination('rs_reseller','rs_order','rs_reseller.id = rs_order.reseller_id','reseller',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td><?php echo $row->balance ;?> K<br>
                        <small class='muted'>On <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        </td>
			<td>Rp. <?php echo core::rupiah($row->harga) ;?>,-</td>
			<td><?php echo $row->order_code ;?></td>
			 
                        
			<td><?php echo $row->username ;?></td>
			<td>
                         <?php if($row->status == 'unpaid'){ ?>
                        <span class='label label-important'><?php echo $row->status ;?></span>
                        <?php } else {?>
			<span class='label label-success'><?php echo $row->status ;?></span>
			<?php } ?>
                        </td>
			<td>
                    
		    <center>
                    <div class='btn-group' >
                    
                    <?php if($row->status == 'unpaid') { ?>
                    <input type='hidden' value='<?php echo $row->id;?>' class='id'>
                    <input type='hidden' value='<?php echo $row->reseller_id;?>' class='reseller_id'>
                    <input type='hidden' value='<?php echo $row->balance;?>' class='balance'>
                    <input type='hidden' value='<?php echo $row->harga;?>' class='harga'>
                    <input type='hidden' value='paid' class='status'>
                        
                        
                    <a href="#myModal" role="button" class="btn btn-small paid" title='Set To paid' data-toggle="modal">
                    <i class='text-info fa fa-smile-o'></i> Set to paid</a>
                     <a href='<?php echo base_url();?>reseller_order/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus permanent data ini?'><i class='text-error fa fa-trash-o'></i></a>
                   
                    <?php } else { ?>
                    <input type='hidden' value='<?php echo $row->id;?>' class='id'>
                    <input type='hidden' value='<?php echo $row->reseller_id;?>' class='reseller_id'>
                    <input type='hidden' value='<?php echo $row->balance;?>' class='balance'>
                    <input type='hidden' value='<?php echo $row->harga_sisa;?>' class='harga_sisa'>
                    <input type='hidden' value='unpaid' class='status'>
                        
                    <a href="#unpaid" role="button" class="btn btn-small unpaid" title='Set To Unpaid' data-toggle="modal">
                    <i class='text-error fa fa-frown-o'></i> set to unpaid</a>
                    <?php } ?>
                    
		    <a href='<?php echo base_url();?>reseller_order/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus permanent data ini?'><i class='text-error fa fa-trash-o'></i></a>
                    <a href='<?php echo base_url();?>invoice/index/<?php echo $row->reseller_id;?>/<?php echo $row->id;?>/<?php echo $row->order_code;?>' target='_blank' class='btn btn-small'># Invoice</a>
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


<?php echo $this->load->view('modal');?>