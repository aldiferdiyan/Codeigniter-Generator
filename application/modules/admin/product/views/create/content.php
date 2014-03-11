<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('product/create');?>' class="form form-horizontal" >
        
       <!-- start nama -->
<div class='control-group <?php echo form_error('nama') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nama</strong></label>
<div class='controls'>
<input type='text' name='nama' value='<?php echo set_value('nama');?>' class='span5' placeholder='nama' required>
<?php echo form_error('nama'); ?></div>
</div>
<!-- end nama -->

<!-- start nilai voucher -->
<div class='control-group <?php echo form_error('nilai_voucher') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nilai voucher</strong></label>
<div class='controls'>
<input type='text' name='nilai_voucher' value='<?php echo set_value('nilai_voucher');?>' class='span5' placeholder='nilai voucher' required>
<?php echo form_error('nilai_voucher'); ?></div>
</div>
<!-- end nilai voucher -->

<!-- start harga -->
<div class='control-group <?php echo form_error('harga') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Harga</strong></label>
<div class='controls'>
<input type='text' name='harga' value='<?php echo set_value('harga');?>' class='span5' placeholder='harga' required>
<?php echo form_error('harga'); ?></div>
</div>
<!-- end harga -->

       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('product');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>