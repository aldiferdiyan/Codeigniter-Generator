<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('admin/create');?>' class="form" >
 

<!-- start username -->
<div class='control-group <?php echo form_error('username') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Username</strong></label>
<div class='controls'>
<input type='text' name='username' value='<?php echo set_value('username');?>' class='span5' placeholder='username' required>
<?php echo form_error('username'); ?></div>
</div>
<!-- end username -->

<!-- start password -->
<div class='control-group <?php echo form_error('password') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Password</strong></label>
<div class='controls'>
<input type='password' name='password' value='' class='span5' placeholder='password' required>
<?php echo form_error('password'); ?></div>
</div>
<!-- end password -->

<!-- start password conf-->
<div class='control-group <?php echo form_error('password_conf') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Konfirmasi Password</strong></label>
<div class='controls'>
<input type='password' name='password_conf' value='' class='span5' placeholder='konfirmasi password' required>
<?php echo form_error('password_conf'); ?></div>
</div>
<!-- end password conf-->

<!-- start email -->
<div class='control-group <?php echo form_error('email') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Email</strong></label>
<div class='controls'>
<input type='email' name='email' value='<?php echo set_value('email');?>' class='span5' placeholder='email' required>
<?php echo form_error('email'); ?></div>
</div>
<!-- end email -->

<!-- start no telepon -->
<div class='control-group <?php echo form_error('no_telepon') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>No telepon</strong></label>
<div class='controls'>
<input type='number' name='no_telepon' value='<?php echo set_value('no_telepon');?>' class='span5' placeholder='no telepon' required>
<?php echo form_error('no_telepon'); ?></div>
</div>
<!-- end no telepon -->

 
<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<select name='status'>
    <option value='1' selected>Super Admin</option>
</select>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->

       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('admin');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>