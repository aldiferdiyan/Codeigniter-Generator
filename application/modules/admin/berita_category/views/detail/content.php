<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_category','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>category</td>
<td><?php echo $row->category;?></td></tr>
<tr><td>category link</td>
<td><?php echo $row->category_link;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>created by</td>
<td><?php echo $row->created_by;?></td></tr>
<tr><td>created by alias</td>
<td><?php echo $row->created_by_alias;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>modified by</td>
<td><?php echo $row->modified_by;?></td></tr>
<tr><td>modified by alias</td>
<td><?php echo $row->modified_by_alias;?></td></tr>
<tr><td>hits</td>
<td><?php echo $row->hits;?></td></tr>
<tr><td>image</td>
<td><?php echo $row->image;?></td></tr>
<tr><td>credit image</td>
<td><?php echo $row->credit_image;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>