<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_setting_general','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>title</td>
<td><?php echo $row->title;?></td></tr>
<tr><td>meta keyword</td>
<td><?php echo $row->meta_keyword;?></td></tr>
<tr><td>meta desc</td>
<td><?php echo $row->meta_desc;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>