<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('berita_category/create');?>' class="form form-horizontal" >
        
       <!-- start category -->
<div class='control-group <?php echo form_error('category') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Category</strong></label>
<div class='controls'>
<input type='text' name='category' value='<?php echo set_value('category');?>' class='span5' placeholder='category' required>
<?php echo form_error('category'); ?></div>
</div>
<!-- end category -->

<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created</strong></label>
<div class='controls'>
<input type='text' name='created' value='<?php echo set_value('created');?>' class='span5' placeholder='created' required>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start created by -->
<div class='control-group <?php echo form_error('created_by') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created by</strong></label>
<div class='controls'>
<input type='text' name='created_by' value='<?php echo set_value('created_by');?>' class='span5' placeholder='created by' required>
<?php echo form_error('created_by'); ?></div>
</div>
<!-- end created by -->

<!-- start created by alias -->
<div class='control-group <?php echo form_error('created_by_alias') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created by alias</strong></label>
<div class='controls'>
<input type='text' name='created_by_alias' value='<?php echo set_value('created_by_alias');?>' class='span5' placeholder='created by alias' required>
<?php echo form_error('created_by_alias'); ?></div>
</div>
<!-- end created by alias -->

<!-- start image -->
<div class='control-group <?php echo form_error('image') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Image</strong></label>
<div class='controls'>
<input type='text' name='image' value='<?php echo set_value('image');?>' class='span5' placeholder='image' required>
<?php echo form_error('image'); ?></div>
</div>
<!-- end image -->

<!-- start credit image -->
<div class='control-group <?php echo form_error('credit_image') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Credit image</strong></label>
<div class='controls'>
<textarea name='credit_image' class='span10' placeholder='credit image' required><?php echo set_value('credit_image');?></textarea>
<?php echo form_error('credit_image'); ?></div>
</div>
<!-- end credit image -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('berita_category');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>