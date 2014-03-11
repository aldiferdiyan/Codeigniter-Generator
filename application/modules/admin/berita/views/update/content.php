<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('berita/update').'/'.$this->uri->segment(3);?>' class="form" >
        
       <?php $query = core::get_where('ac_berita','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
  <!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' value='<?php echo $row['title'];?>' class='span9' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start intro content -->
<div class='control-group <?php echo form_error('intro_content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Intro</strong></label>
<div class='controls'>
<textarea name='intro_content' id='intro_content' class='span10' placeholder='intro content'><?php echo $row['intro_content'];?></textarea>
<?php echo form_error('intro_content'); ?></div>
</div>
<!-- end intro content -->

<!-- start content -->
<div class='control-group <?php echo form_error('content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Content</strong></label>
<div class='controls'>
<textarea name='content' id='content' class='span10' placeholder='content'><?php echo $row['content'];?></textarea>
<?php echo form_error('content'); ?></div>
</div>
<!-- end content -->

 
<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Date</strong></label>
<div class='controls'>
<div id="datetimepicker" class="input-append date">
    <input name='created' data-format="yyyy-MM-dd hh:mm:ss" value='<?php echo $row['created'];?>' type="text" readonly>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start created by -->
 
<input type='hidden' name='created_by' value='<?php echo $this->session->userdata('admin_id');?>' class='span5' placeholder='created by' required>

<!-- end created by -->

<!-- start created alias -->
<div class='control-group <?php echo form_error('created_alias') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Author</strong></label>
<div class='controls'>
<input type='text' name='created_alias' value='<?php echo $row['created_alias'];?>' class='span5' placeholder='created alias' required>
<?php echo form_error('created_alias'); ?></div>
</div>
<!-- end created alias -->
<hr>
<!-- start meta key -->
<div class='control-group <?php echo form_error('meta_key') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta keyword</strong></label>
<div class='controls'>
<input type='text' name='meta_key' value='<?php echo $row['meta_key'];?>' class='span5' placeholder='meta key'>
<span class='help-block'>Pisahkan kata dengan koma</span>
<?php echo form_error('meta_key'); ?></div>
</div>
<!-- end meta key -->

<!-- start meta desc -->
<div class='control-group <?php echo form_error('meta_desc') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta description</strong></label>
<div class='controls'>
<textarea name='meta_desc' rows='4' class='span10' placeholder='meta desc'><?php echo $row['meta_desc'];?></textarea>
<?php echo form_error('meta_desc'); ?></div>
</div>
<!-- end meta desc -->
<hr>
<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<select name='status'>
    <option value='publish'>Publish</option>
    <option value='draft'>Save to Draft</option>
</select>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->

<!-- start category id -->
<div class='control-group <?php echo form_error('category_id') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Category</strong></label>
<div class='controls'>
    
<select name='category_id' required>
    <?php foreach(core::get_all('ac_category','ancient')->result() as $row){ ?>
    <option value='<?php echo $row->id;?>'><?php echo $row->category;?></option>
    <?php } ?>
</select>

<?php echo form_error('category_id'); ?>

</div>
</div>
<!-- end category id -->


    <hr>   
<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type='reset' class="btn"><i class='fa fa-times'></i> Reset</button>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class="fa fa-edit"></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>