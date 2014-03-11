<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('setting_general/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('ac_setting_general','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' class='span5' value='<?php echo $row['title'];?>' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start meta keyword -->
<div class='control-group <?php echo form_error('meta_keyword') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta keyword</strong></label>
<div class='controls'>
<input type='text' name='meta_keyword' class='span5' value='<?php echo $row['meta_keyword'];?>' placeholder='meta keyword' required>
<?php echo form_error('meta_keyword'); ?></div>
</div>
<!-- end meta keyword -->

<!-- start meta desc -->
<div class='control-group <?php echo form_error('meta_desc') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta desc</strong></label>
<div class='controls'>
<textarea name='meta_desc' class='span5'  placeholder='meta desc' required><?php echo $row['meta_desc'];?><?php echo set_value('meta_desc');?></textarea>
<?php echo form_error('meta_desc'); ?></div>
</div>
<!-- end meta desc -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('setting_general');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>