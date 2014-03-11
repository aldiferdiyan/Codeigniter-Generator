<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('rs_order','reseller',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>balance</td>
<td><?php echo $row->balance;?></td></tr>
<tr><td>harga</td>
<td><?php echo $row->harga;?></td></tr>
<tr><td>order code</td>
<td><?php echo $row->order_code;?></td></tr>
<tr><td>metode pembayaran</td>
<td><?php echo $row->metode_pembayaran;?></td></tr>
<tr><td>message</td>
<td><?php echo $row->message;?></td></tr>
<tr><td>reseller id</td>
<td><?php echo $row->reseller_id;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>