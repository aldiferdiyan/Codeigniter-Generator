<div class='row-fluid'>
<div class="span12">


<?php echo $this->load->view('_layouts/menus');?>


<div class="input-prepend input-append">
<?php
if($this->uri->segment(3) == 'rows')
{
 $rows =  "order_member/search/rows/".$this->uri->segment(4);
}
else
{
 $rows =  "order_member/search";
}
?>
<form action='<?php echo base_url($rows);?>' method='get'>

<input class="span9" type="text" name='search'>                   
<select name='search_by' style='width:100px;'>
<option value='order_code' <?php echo $this->input->get('search_by') == 'order_code' ? 'selected' : '' ;?>>order code</option>
<option value='voucher' <?php echo $this->input->get('search_by') == 'voucher' ? 'selected' : '' ;?>>voucher</option>
<option value='jumlah' <?php echo $this->input->get('search_by') == 'jumlah' ? 'selected' : '' ;?>>jumlah</option>
<option value='harga' <?php echo $this->input->get('search_by') == 'harga' ? 'selected' : '' ;?>>harga</option>
<option value='created' <?php echo $this->input->get('search_by') == 'created' ? 'selected' : '' ;?>>created</option>
<option value='status' <?php echo $this->input->get('search_by') == 'status' ? 'selected' : '' ;?>>status</option>

</select>
<button class="btn" type="submit">Cari</button>
</form>
</div>
 
<select class="span2  pull-right" onchange="location = this.options[this.selectedIndex].value;">
<option selected='selected' disabled='disabled'>Pilih Rows</option>
<option value="<?php echo base_url('order_member/search/rows/25');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">25 Rows</option>
<option value="<?php echo base_url('order_member/search/rows/50');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">50 Rows</option>
<option value="<?php echo base_url('order_member/search/rows/75');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">75 Rows</option>
<option value="<?php echo base_url('order_member/search/rows/100');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">100 Rows</option>
<option value="<?php echo base_url('order_member/search/rows/200');?>?search=<?php echo $this->input->get('search');?>&search_by=<?php echo $this->input->get('search_by');?>">200 Rows</option>
</select>
 
 

<?php
if($this->uri->segment(3) == 'rows'){
$per_page = $this->uri->segment(4);
$segment  = 5;
$url      = 'order_member/search/rows/'.$this->uri->segment(4).'/';
}else{
$per_page = 25;
$segment  = 3;
$url      = 'order_member/search';
}
?>

    <div class='table-responsive margin-table'>
<table class='table table-striped table-bordered table-hover table-condensed'>
<caption class='text-right'>
<?php $num_rows = core::get_join_search('mb_member','mb_order','mb_member.id = mb_order.member_id','member',$this->input->get('search'),$this->input->get('search_by'))->num_rows();?>
<small>Total data : <u class='text-error'><?php echo $num_rows;?></u>
		               ( Hasil pencarian berdasarkan <u class='text-error'> <?php echo $this->input->get('search_by');?></u> ) -
			       <a href='<?php echo base_url('order_member');?>'>Back to all</a></small>
</caption><thead>
<tr>
<th style='width:20px;'>No</th>
<th>order code</th>
<th>voucher</th>
<th>QTY</th>
<th>harga</th>
<th>Sub total</th>
<th>Member</th>
<th>status</th>
<th style='text-align:center;width:100px;'>Aksi</th>
</tr></thead>
<tbody>
<?php $i = $this->uri->segment($segment) + 1;?>
<?php foreach(core::get_join_search_pagination('mb_member','mb_order','mb_member.id = mb_order.member_id','member',$this->input->get('search'),$this->input->get('search_by'),$per_page,$url)->result() as $row): { ?><tr>
<td><?php echo $i;?></td>
			<td>
                        <?php echo $row->order_code ;?><br>
                        <small class='muted'>on <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</small>
                        </td>
			<td><?php echo $row->voucher ;?> K</td>
			<td><?php echo $row->jumlah ;?></td>
			<td>Rp. <?php echo core::rupiah($row->harga) ;?>,-</td>
			 <td>Rp. <?php echo core::rupiah($row->sub_total) ;?>,-</td>
                        <td><?php echo $row->username;?></td>
                        <td>
                         <?php if($row->status == 'unpaid') { ?>
                        <label class='label label-important'><?php echo $row->status;?></label>
                        <?php } else { ?>
                         <label class='label label-success'><?php echo $row->status;?></label>
                        <?php }?>
                        </td>
			<td>
		     <center><div class='btn-group' >
                    <?php if($row->status == 'unpaid') { ?>
                    <a href='<?php echo base_url();?>order_member/update/<?php echo $row->id;?>/<?php echo $row->jumlah;?>/<?php echo $row->member_id;?>/<?php echo $row->voucher;?>/paid/<?php echo $row->order_code;?>' class='btn btn-small'
                    data-confirm='Jadikan sudah di bayar, dan kirimkan <?php echo $row->jumlah;?> code voucher senilai <?php echo $row->voucher;?>K yang akan di generate otomatis ke member?'>
                    <i class='text-info fa fa-smile-o'></i> set to paid
                    </a>
                    <a href='<?php echo base_url();?>order_member/delete/<?php echo $row->id;?>' class='btn btn-small' data-confirm='Hapus permanen data ini?'><i class='text-error fa fa-trash-o'></i></a>
                   
                    <?php } else { ?>
                    
                     <a href='<?php echo base_url();?>order_member/update/<?php echo $row->id;?>/<?php echo $row->jumlah;?>/<?php echo $row->member_id;?>/<?php echo $row->voucher;?>/unpaid/<?php echo $row->order_code;?>'
                   class='btn btn-small' data-confirm='jadikan belum di bayar? dan hapus  <?php echo $row->jumlah;?> code voucher senilai <?php echo $row->voucher;?>K yang akan di generate otomatis ke member?'>
                    <i class='text-error fa fa-frown-o'></i> set to unpaid
                    </a>
                    <?php } ?>
                    
		    <a target='_blank' href='<?php echo base_url();?>invoice_member/index/<?php echo $row->member_id;?>/<?php echo $row->id;?>/<?php echo $row->order_code;?>' class='btn btn-small'># Invoice</a>
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