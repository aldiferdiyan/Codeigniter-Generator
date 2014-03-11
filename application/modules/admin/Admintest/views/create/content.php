<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('Admintest/create');?>' class="form form-horizontal" >
        
       <!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' value='<?php echo set_value('title');?>' class='span5' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start intro content -->
<div class='control-group <?php echo form_error('intro_content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Intro content</strong></label>
<div class='controls'>
<textarea name='intro_content' class='span5' placeholder='intro content' required><?php echo set_value('intro_content');?></textarea>
<?php echo form_error('intro_content'); ?></div>
</div>
<!-- end intro content -->

<!-- start content -->
<div class='control-group <?php echo form_error('content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Content</strong></label>
<div class='controls'>
<textarea name='content' class='span5' placeholder='content' required><?php echo set_value('content');?></textarea>
<?php echo form_error('content'); ?></div>
</div>
<!-- end content -->

<!-- start credit image -->
<div class='control-group <?php echo form_error('credit_image') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Credit image</strong></label>
<div class='controls'>
<textarea name='credit_image' class='span5' placeholder='credit image' required><?php echo set_value('credit_image');?></textarea>
<?php echo form_error('credit_image'); ?></div>
</div>
<!-- end credit image -->

<!-- start image -->
<div class='control-group <?php echo form_error('image') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Image</strong></label>
<div class='controls'>
<input type='text' name='image' value='<?php echo set_value('image');?>' class='span5' placeholder='image' required>
<?php echo form_error('image'); ?></div>
</div>
<!-- end image -->

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

<!-- start created alias -->
<div class='control-group <?php echo form_error('created_alias') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created alias</strong></label>
<div class='controls'>
<input type='text' name='created_alias' value='<?php echo set_value('created_alias');?>' class='span5' placeholder='created alias' required>
<?php echo form_error('created_alias'); ?></div>
</div>
<!-- end created alias -->

<!-- start modified -->
<div class='control-group <?php echo form_error('modified') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Modified</strong></label>
<div class='controls'>
<input type='text' name='modified' value='<?php echo set_value('modified');?>' class='span5' placeholder='modified' required>
<?php echo form_error('modified'); ?></div>
</div>
<!-- end modified -->

<!-- start modified by -->
<div class='control-group <?php echo form_error('modified_by') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Modified by</strong></label>
<div class='controls'>
<input type='text' name='modified_by' value='<?php echo set_value('modified_by');?>' class='span5' placeholder='modified by' required>
<?php echo form_error('modified_by'); ?></div>
</div>
<!-- end modified by -->

<!-- start modified alias -->
<div class='control-group <?php echo form_error('modified_alias') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Modified alias</strong></label>
<div class='controls'>
<input type='text' name='modified_alias' value='<?php echo set_value('modified_alias');?>' class='span5' placeholder='modified alias' required>
<?php echo form_error('modified_alias'); ?></div>
</div>
<!-- end modified alias -->

<!-- start meta key -->
<div class='control-group <?php echo form_error('meta_key') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta key</strong></label>
<div class='controls'>
<input type='text' name='meta_key' value='<?php echo set_value('meta_key');?>' class='span5' placeholder='meta key' required>
<?php echo form_error('meta_key'); ?></div>
</div>
<!-- end meta key -->

<!-- start meta desc -->
<div class='control-group <?php echo form_error('meta_desc') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Meta desc</strong></label>
<div class='controls'>
<textarea name='meta_desc' class='span5' placeholder='meta desc' required><?php echo set_value('meta_desc');?></textarea>
<?php echo form_error('meta_desc'); ?></div>
</div>
<!-- end meta desc -->

<!-- start hits -->
<div class='control-group <?php echo form_error('hits') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Hits</strong></label>
<div class='controls'>
<input type='text' name='hits' value='<?php echo set_value('hits');?>' class='span5' placeholder='hits' required>
<?php echo form_error('hits'); ?></div>
</div>
<!-- end hits -->

<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<input type='text' name='status' value='<?php echo set_value('status');?>' class='span5' placeholder='status' required>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->

<!-- start category id -->
<div class='control-group <?php echo form_error('category_id') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Category id</strong></label>
<div class='controls'>
<input type='text' name='category_id' value='<?php echo set_value('category_id');?>' class='span5' placeholder='category id' required>
<?php echo form_error('category_id'); ?></div>
</div>
<!-- end category id -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('Admintest');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>