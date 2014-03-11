<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('reseller_order/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('rs_order','reseller',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start balance -->
<div class='control-group <?php echo form_error('balance') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Balance</strong></label>
<div class='controls'>
<input type='text' name='balance' class='span5' value='<?php echo $row['balance'];?>' placeholder='balance' required>
<?php echo form_error('balance'); ?></div>
</div>
<!-- end balance -->

<!-- start harga -->
<div class='control-group <?php echo form_error('harga') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Harga</strong></label>
<div class='controls'>
<input type='text' name='harga' class='span5' value='<?php echo $row['harga'];?>' placeholder='harga' required>
<?php echo form_error('harga'); ?></div>
</div>
<!-- end harga -->

<!-- start order code -->
<div class='control-group <?php echo form_error('order_code') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Order code</strong></label>
<div class='controls'>
<input type='text' name='order_code' class='span5' value='<?php echo $row['order_code'];?>' placeholder='order code' required>
<?php echo form_error('order_code'); ?></div>
</div>
<!-- end order code -->

<!-- start reseller id -->
<div class='control-group <?php echo form_error('reseller_id') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Reseller id</strong></label>
<div class='controls'>
<input type='text' name='reseller_id' class='span5' value='<?php echo $row['reseller_id'];?>' placeholder='reseller id' required>
<?php echo form_error('reseller_id'); ?></div>
</div>
<!-- end reseller id -->

<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created</strong></label>
<div class='controls'>
<input type='text' name='created' class='span5' value='<?php echo $row['created'];?>' placeholder='created' required>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

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
<a href='<?php echo base_url('reseller_order');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>