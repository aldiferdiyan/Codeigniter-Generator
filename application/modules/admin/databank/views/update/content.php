<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('databank/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('ac_databank','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start bank -->
<div class='control-group <?php echo form_error('bank') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Bank</strong></label>
<div class='controls'>
<input type='text' name='bank' class='span5' value='<?php echo $row['bank'];?>' placeholder='bank' required>
<?php echo form_error('bank'); ?></div>
</div>
<!-- end bank -->

<!-- start atas nama -->
<div class='control-group <?php echo form_error('atas_nama') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Atas nama</strong></label>
<div class='controls'>
<input type='text' name='atas_nama' class='span5' value='<?php echo $row['atas_nama'];?>' placeholder='atas nama' required>
<?php echo form_error('atas_nama'); ?></div>
</div>
<!-- end atas nama -->

<!-- start no rek -->
<div class='control-group <?php echo form_error('no_rek') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>No rek</strong></label>
<div class='controls'>
<input type='text' name='no_rek' class='span5' value='<?php echo $row['no_rek'];?>' placeholder='no rek' required>
<?php echo form_error('no_rek'); ?></div>
</div>
<!-- end no rek -->

<!-- start cabang -->
<div class='control-group <?php echo form_error('cabang') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Cabang</strong></label>
<div class='controls'>
<textarea name='cabang' class='span5'  placeholder='cabang' required><?php echo $row['cabang'];?><?php echo set_value('cabang');?></textarea>
<?php echo form_error('cabang'); ?></div>
</div>
<!-- end cabang -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('databank');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>