<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('reseller/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('rs_reseller','reseller',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start id -->
<div class='control-group <?php echo form_error('id') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Id</strong></label>
<div class='controls'>
<input type='text' name='id' class='span5' value='<?php echo $row['id'];?>' placeholder='id' required>
<?php echo form_error('id'); ?></div>
</div>
<!-- end id -->

<!-- start modified -->
<div class='control-group <?php echo form_error('modified') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Modified</strong></label>
<div class='controls'>
<input type='text' name='modified' class='span5' value='<?php echo $row['modified'];?>' placeholder='modified' required>
<?php echo form_error('modified'); ?></div>
</div>
<!-- end modified -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('reseller');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>