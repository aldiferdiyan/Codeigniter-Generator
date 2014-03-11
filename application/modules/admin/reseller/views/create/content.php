<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('reseller/create');?>' class="form form-horizontal" >
        
       <!-- start id -->
<div class='control-group <?php echo form_error('id') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Id</strong></label>
<div class='controls'>
<input type='text' name='id' value='<?php echo set_value('id');?>' class='span5' placeholder='id' required>
<?php echo form_error('id'); ?></div>
</div>
<!-- end id -->

<!-- start modified -->
<div class='control-group <?php echo form_error('modified') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Modified</strong></label>
<div class='controls'>
<input type='text' name='modified' value='<?php echo set_value('modified');?>' class='span5' placeholder='modified' required>
<?php echo form_error('modified'); ?></div>
</div>
<!-- end modified -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('reseller');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>