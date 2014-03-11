<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_voucher','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>voucher code</td>
<td><?php echo $row->voucher_code;?></td></tr>
<tr><td>nilai</td>
<td><?php echo $row->nilai;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>