<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('sp_product','shop',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>nama</td>
<td><?php echo $row->nama;?></td></tr>
<tr><td>product code</td>
<td><?php echo $row->product_code;?></td></tr>
<tr><td>nilai voucher</td>
<td><?php echo $row->nilai_voucher;?></td></tr>
<tr><td>harga</td>
<td><?php echo $row->harga;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>admin id</td>
<td><?php echo $row->admin_id;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>