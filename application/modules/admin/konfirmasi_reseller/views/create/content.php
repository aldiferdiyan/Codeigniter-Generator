<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('konfirmasi_reseller/create');?>' class="form form-horizontal" >
        
       <!-- start order code -->
<div class='control-group <?php echo form_error('order_code') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Order code</strong></label>
<div class='controls'>
<input type='text' name='order_code' value='<?php echo set_value('order_code');?>' class='span5' placeholder='order code' required>
<?php echo form_error('order_code'); ?></div>
</div>
<!-- end order code -->

<!-- start atas nama -->
<div class='control-group <?php echo form_error('atas_nama') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Atas nama</strong></label>
<div class='controls'>
<input type='text' name='atas_nama' value='<?php echo set_value('atas_nama');?>' class='span5' placeholder='atas nama' required>
<?php echo form_error('atas_nama'); ?></div>
</div>
<!-- end atas nama -->

<!-- start bank -->
<div class='control-group <?php echo form_error('bank') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Bank</strong></label>
<div class='controls'>
<input type='text' name='bank' value='<?php echo set_value('bank');?>' class='span5' placeholder='bank' required>
<?php echo form_error('bank'); ?></div>
</div>
<!-- end bank -->

<!-- start jumlah transfer -->
<div class='control-group <?php echo form_error('jumlah_transfer') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Jumlah transfer</strong></label>
<div class='controls'>
<input type='text' name='jumlah_transfer' value='<?php echo set_value('jumlah_transfer');?>' class='span5' placeholder='jumlah transfer' required>
<?php echo form_error('jumlah_transfer'); ?></div>
</div>
<!-- end jumlah transfer -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('konfirmasi_reseller');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>