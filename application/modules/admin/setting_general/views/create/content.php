<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('setting_general/create');?>' class="form form-horizontal" >
        
       <!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' value='<?php echo set_value('title');?>' class='span5' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start meta keyword -->
<div class='control-group <?php echo form_error('meta_keyword') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta keyword</strong></label>
<div class='controls'>
<input type='text' name='meta_keyword' value='<?php echo set_value('meta_keyword');?>' class='span5' placeholder='meta keyword' required>
<?php echo form_error('meta_keyword'); ?></div>
</div>
<!-- end meta keyword -->

<!-- start meta desc -->
<div class='control-group <?php echo form_error('meta_desc') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta desc</strong></label>
<div class='controls'>
<textarea name='meta_desc' class='span5' placeholder='meta desc' required><?php echo set_value('meta_desc');?></textarea>
<?php echo form_error('meta_desc'); ?></div>
</div>
<!-- end meta desc -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('setting_general');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>