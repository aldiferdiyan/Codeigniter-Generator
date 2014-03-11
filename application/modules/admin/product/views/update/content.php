<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('product/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('sp_product','shop',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start nama -->
<div class='control-group <?php echo form_error('nama') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nama</strong></label>
<div class='controls'>
<input type='text' name='nama' class='span5' value='<?php echo $row['nama'];?>' placeholder='nama' required>
<?php echo form_error('nama'); ?></div>
</div>
<!-- end nama -->

<!-- start nilai voucher -->
<div class='control-group <?php echo form_error('nilai_voucher') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nilai voucher</strong></label>
<div class='controls'>
<input type='text' name='nilai_voucher' class='span5' value='<?php echo $row['nilai_voucher'];?>' placeholder='nilai voucher' required>
<?php echo form_error('nilai_voucher'); ?></div>
</div>
<!-- end nilai voucher -->

<!-- start harga -->
<div class='control-group <?php echo form_error('harga') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Harga</strong></label>
<div class='controls'>
<input type='text' name='harga' class='span5' value='<?php echo $row['harga'];?>' placeholder='harga' required>
<?php echo form_error('harga'); ?></div>
</div>
<!-- end harga -->

<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('product');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>