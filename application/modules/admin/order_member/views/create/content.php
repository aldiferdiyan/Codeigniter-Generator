<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('order_member/create');?>' class="form form-horizontal" >
        
       <!-- start order code -->
<div class='control-group <?php echo form_error('order_code') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Order code</strong></label>
<div class='controls'>
<input type='text' name='order_code' value='<?php echo set_value('order_code');?>' class='span5' placeholder='order code' required>
<?php echo form_error('order_code'); ?></div>
</div>
<!-- end order code -->

<!-- start voucher -->
<div class='control-group <?php echo form_error('voucher') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Voucher</strong></label>
<div class='controls'>
<input type='text' name='voucher' value='<?php echo set_value('voucher');?>' class='span5' placeholder='voucher' required>
<?php echo form_error('voucher'); ?></div>
</div>
<!-- end voucher -->

<!-- start jumlah -->
<div class='control-group <?php echo form_error('jumlah') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Jumlah</strong></label>
<div class='controls'>
<input type='text' name='jumlah' value='<?php echo set_value('jumlah');?>' class='span5' placeholder='jumlah' required>
<?php echo form_error('jumlah'); ?></div>
</div>
<!-- end jumlah -->

<!-- start harga -->
<div class='control-group <?php echo form_error('harga') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Harga</strong></label>
<div class='controls'>
<input type='text' name='harga' value='<?php echo set_value('harga');?>' class='span5' placeholder='harga' required>
<?php echo form_error('harga'); ?></div>
</div>
<!-- end harga -->

<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created</strong></label>
<div class='controls'>
<input type='text' name='created' value='<?php echo set_value('created');?>' class='span5' placeholder='created' required>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<input type='text' name='status' value='<?php echo set_value('status');?>' class='span5' placeholder='status' required>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('order_member');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>