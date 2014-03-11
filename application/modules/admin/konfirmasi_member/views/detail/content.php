<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('mb_konfirmasi','member',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>


<tr><td>order code</td>
<td><?php echo $row->order_code;?></td></tr>
<tr><td>atas nama</td>
<td><?php echo $row->atas_nama;?></td></tr>
<tr><td>bank</td>
<td><?php echo $row->bank;?></td></tr>
<tr><td>metode pembayaran</td>
<td><?php echo $row->metode_pembayaran;?></td></tr>
<tr><td>jumlah transfer</td>
<td><?php echo $row->jumlah_transfer;?></td></tr>
<tr><td>message</td>
<td><?php echo $row->message;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>

<?php } ?></tbody></table>
        
</div>
</div>