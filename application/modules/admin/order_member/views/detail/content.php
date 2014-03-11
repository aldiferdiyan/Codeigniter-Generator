<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('mb_order','member',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>order code</td>
<td><?php echo $row->order_code;?></td></tr>
<tr><td>voucher</td>
<td><?php echo $row->voucher;?></td></tr>
<tr><td>jumlah</td>
<td><?php echo $row->jumlah;?></td></tr>
<tr><td>harga</td>
<td><?php echo $row->harga;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
<tr><td>member id</td>
<td><?php echo $row->member_id;?></td></tr>
<tr><td>metode pembayaran</td>
<td><?php echo $row->metode_pembayaran;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>