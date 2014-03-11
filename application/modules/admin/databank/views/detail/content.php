<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_databank','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>bank</td>
<td><?php echo $row->bank;?></td></tr>
<tr><td>atas nama</td>
<td><?php echo $row->atas_nama;?></td></tr>
<tr><td>no rek</td>
<td><?php echo $row->no_rek;?></td></tr>
<tr><td>cabang</td>
<td><?php echo $row->cabang;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>