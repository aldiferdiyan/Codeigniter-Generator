
 
      
	<div style='background: #000;padding: 10px;'>
	<center><h3>Login Member</h3></center><br> 
	
	<!--START FORM-->
<form method='POST' charset='UTF-8' action='<?php echo base_url('login');?>' class="form-horizontal" >
<?php if($this->session->flashdata('login_error')) { ?>
		  <center><div class="alert alert-error">*Username or password is Wrong !!</div></center><br><br>
<?php } ?>
       <!-- start username -->
<div class='control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?>'>
<label class='control-label' >Member ID<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text' name='username'   value='<?php echo set_value('username'); ?>' placeholder='Member ID' required>
<?php echo form_error('username'); ?></div>
</div>
<!-- end username -->

<!-- start password -->
<div class='control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?>'>
<label class='control-label' >password<span class='text-error'>*</span></label>
<div class='controls'>
<input type='password' name='password'   placeholder='password' required>
<?php echo form_error('password'); ?></div>
</div>
<!-- end password -->


<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type='reset' class="btn">Reset</button>
<button type="submit" class="btn btn-primary">Masuk</button>
</div>
</div>
<!--end submit -->
</form>
        </div>