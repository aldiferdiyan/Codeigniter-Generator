<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('menus_top/create');?>' class="form form-horizontal" >
        
       <!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' value='<?php echo set_value('title');?>' class='span5' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start url -->
<div class='control-group <?php echo form_error('url') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Url</strong></label>
<div class='controls'>
<input type='text' name='url' value='<?php echo set_value('url');?>' class='span5' placeholder='url' required>
<?php echo form_error('url'); ?></div>
</div>
<!-- end url -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('menus_top');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>