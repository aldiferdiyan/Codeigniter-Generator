<div class='row-fluid'>
<div class="span12">

<?php echo $this->load->view('_layouts/menus');?>   

<center><h4>Generate Voucher Code</h4></center>
<hr>
<!--START FORM-->
<form method='POST' charset='UTF-8' action='<?php echo base_url('voucher/create');?>' class="form-horizontal" >
 
 
<div class='control-group <?php echo form_error('nilai') ? 'error' : ''; ?>'>
<label class='control-label' >Pilih Nilai Voucher</label>
<div class='controls'>
<select name='nilai'>
    <option selected='selected' disabled='disabled'>Pilih Nilai Voucher</option>
    <option value='10'>Voucher 10K</option>
    <option value='20'>Voucher 20K</option>
    <option value='50'>Voucher 50K</option>
    <option value='100'>Voucher 100K</option>
    <option value='200'>Voucher 200K</option>
</select>
<?php echo form_error('nilai');?>
</div>
</div>
 		

<div class='control-group '>
<label class='control-label' >Jumlah</label>
<div class='controls'>
<select class='span2' name='jumlah'>
    <?php for($i = 1;$i <= 25;$i++){ ?>
    <option value='<?php echo $i;?>'><?php echo $i;?></option>
    <?php } ?>

</select>
</div>
</div>


<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type="reset" class="btn">Reset</button>
<button type="submit" class="btn btn-primary">Generate</button>
</div>
</div>
<!--end submit -->
 

    </form>
    <!--END FORM-->
    
<?php echo $generate;?>
</div>
</div>