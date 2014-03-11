<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('member/create');?>' class="form form-horizontal" >
        
       <!-- start nama -->
<div class='control-group <?php echo form_error('nama') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Nama</strong></label>
<div class='controls'>
<input type='text' name='nama' value='<?php echo set_value('nama');?>' class='span5' placeholder='nama' required>
<?php echo form_error('nama'); ?></div>
</div>
<!-- end nama -->

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
<input type='text' name='password' value='<?php echo set_value('password');?>' class='span5' placeholder='password' required>
<?php echo form_error('password'); ?></div>
</div>
<!-- end password -->

<!-- start email -->
<div class='control-group <?php echo form_error('email') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Email</strong></label>
<div class='controls'>
<input type='text' name='email' value='<?php echo set_value('email');?>' class='span5' placeholder='email' required>
<?php echo form_error('email'); ?></div>
</div>
<!-- end email -->

<!-- start no telepon -->
<div class='control-group <?php echo form_error('no_telepon') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>No telepon</strong></label>
<div class='controls'>
<input type='text' name='no_telepon' value='<?php echo set_value('no_telepon');?>' class='span5' placeholder='no telepon' required>
<?php echo form_error('no_telepon'); ?></div>
</div>
<!-- end no telepon -->

<!-- start tgl lahir -->
<div class='control-group <?php echo form_error('tgl_lahir') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Tgl lahir</strong></label>
<div class='controls'>
<input type='text' name='tgl_lahir' value='<?php echo set_value('tgl_lahir');?>' class='span5' placeholder='tgl lahir' required>
<?php echo form_error('tgl_lahir'); ?></div>
</div>
<!-- end tgl lahir -->

<!-- start jenis kelamin -->
<div class='control-group <?php echo form_error('jenis_kelamin') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Jenis kelamin</strong></label>
<div class='controls'>
<input type='text' name='jenis_kelamin' value='<?php echo set_value('jenis_kelamin');?>' class='span5' placeholder='jenis kelamin' required>
<?php echo form_error('jenis_kelamin'); ?></div>
</div>
<!-- end jenis kelamin -->

<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created</strong></label>
<div class='controls'>
<input type='text' name='created' value='<?php echo set_value('created');?>' class='span5' placeholder='created' required>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start avatar -->
<div class='control-group <?php echo form_error('avatar') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Avatar</strong></label>
<div class='controls'>
<input type='text' name='avatar' value='<?php echo set_value('avatar');?>' class='span5' placeholder='avatar' required>
<?php echo form_error('avatar'); ?></div>
</div>
<!-- end avatar -->

<!-- start description -->
<div class='control-group <?php echo form_error('description') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Description</strong></label>
<div class='controls'>
<textarea name='description' class='span10' placeholder='description' required><?php echo set_value('description');?></textarea>
<?php echo form_error('description'); ?></div>
</div>
<!-- end description -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('member');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-primary"><i class="fa fa-location-arrow"></i> Submit</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>