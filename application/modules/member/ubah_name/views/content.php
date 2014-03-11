
  <?php foreach (core::get_where('mb_member','member',array('username' => $this->session->userdata('member_username')),1)->result() as $row) { ; ?>
   <div class='box-content-post'>
                       Welcome, <?php echo $this->session->userdata('member_username');?>
                       <span style='float:right;'?>Last login : <?php echo date("d M Y H:i", strtotime($row->last_login));?> WIB</span>
		        </div>
 <?php } ?>
<br>

<center><h2>Ubah Password</h2></center><br> 
<?php if($this->session->flashdata('sukses')) { ?>
<div style='margin-bottom: 20px;background: #55aaff;text-align: center;color: #FFF;height: 40px;line-height: 40px;'>Berhasil merubah password</div>

<?php } ?>
<!--START FORM-->
<form method='POST' charset='UTF-8' action='<?php echo base_url('ubah_password');?>' class="form-horizontal" >
<?php if($this->session->flashdata('login_error')) { ?>
		  <center><div class="alert alert-error">*Username or password is Wrong !!</div></center><br><br>
<?php } ?>
       <!-- start username -->
<div class='control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?>'>
<label class='control-label' >Password Lama<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text' name='password_lama'   value='<?php echo set_value('username'); ?>' placeholder='Password lama' required>
<?php echo form_error('password_lama'); ?></div>
</div>
<!-- end username -->

<!-- start password -->
<div class='control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?>'>
<label class='control-label' >Password Baru<span class='text-error'>*</span></label>
<div class='controls'>
<input type='password' name='password_baru'   placeholder='password baru' required>
<?php echo form_error('password_baru'); ?></div>
</div>
<!-- end password -->

<!-- start password -->
<div class='control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?>'>
<label class='control-label' >Ulangi Password Baru<span class='text-error'>*</span></label>
<div class='controls'>
<input type='password' name='ulangi_password_baru'   placeholder='ulangi password baru' required>
<?php echo form_error('ulangi_password_baru'); ?></div>
</div>
<!-- end password -->


<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type='reset' class="btn">Reset</button>
<button type="submit" class="btn btn-primary">Ubah</button>
</div>
</div>
<!--end submit -->
</form>