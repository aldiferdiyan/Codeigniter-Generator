<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_berita','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
<tr><td>id</td>
<td><?php echo $row->id;?></td></tr>
<tr><td>title</td>
<td><?php echo $row->title;?></td></tr>
<tr><td>title link</td>
<td><?php echo $row->title_link;?></td></tr>
<tr><td>intro content</td>
<td><?php echo $row->intro_content;?></td></tr>
<tr><td>content</td>
<td><?php echo $row->content;?></td></tr>
<tr><td>credit image</td>
<td><?php echo $row->credit_image;?></td></tr>
<tr><td>image</td>
<td><img src='<?php echo $row->image;?>'></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>created by</td>
<td><?php echo $row->created_by;?></td></tr>
<tr><td>created alias</td>
<td><?php echo $row->created_alias;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>modified by</td>
<td><?php echo $row->modified_by;?></td></tr>
<tr><td>modified alias</td>
<td><?php echo $row->modified_alias;?></td></tr>
<tr><td>meta key</td>
<td><?php echo $row->meta_key;?></td></tr>
<tr><td>meta desc</td>
<td><?php echo $row->meta_desc;?></td></tr>
<tr><td>hits</td>
<td><?php echo $row->hits;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
<tr><td>category id</td>
<td><?php echo $row->category_id;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>