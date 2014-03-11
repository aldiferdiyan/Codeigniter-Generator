<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('voucher/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('ac_voucher','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start voucher code -->
<div class='control-group <?php echo form_error('voucher_code') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Voucher code</strong></label>
<div class='controls'>
<input type='text' name='voucher_code' class='span5' value='<?php echo $row['voucher_code'];?>' placeholder='voucher code' required>
<?php echo form_error('voucher_code'); ?></div>
</div>
<!-- end voucher code -->

<!-- start nilai -->
<div class='control-group <?php echo form_error('nilai') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nilai</strong></label>
<div class='controls'>
<input type='text' name='nilai' class='span5' value='<?php echo $row['nilai'];?>' placeholder='nilai' required>
<?php echo form_error('nilai'); ?></div>
</div>
<!-- end nilai -->

<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<input type='text' name='status' class='span5' value='<?php echo $row['status'];?>' placeholder='status' required>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('voucher');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>