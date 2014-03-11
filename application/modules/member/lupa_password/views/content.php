 <div class='body-content'>
 
<center><h3>Lupa Password ?</h3></center> 
anda dapat melakukan recovery password anda ke alamat email yang sebelumnya anda daftarkan pada ancientgame.
<?php if($this->session->flashdata('sukses')) { ?>
<br><br><div style='margin-bottom: 20px;background: #0080ff;text-align: center;color: #FFF;padding: 10px;'>
<p>Password recovery berhasil di kirim ke <u><?php echo $this->session->userdata('email');?></u>, silakan cek pada <u>inbox/spam</u> email anda.
</p></div>
<?php } ?>
<?php if(form_error('email') == TRUE){ ?>
<br><div style='margin-bottom: 20px;background: #800000;text-align: center;color: #FFF;height: 40px;line-height: 40px;'>
<?php echo form_error('email'); ?>
</div>
<?php } ?>


<!--START FORM-->
<form method='POST' charset='UTF-8' action='<?php echo base_url('lupa_password');?>' >
 
      
 
 <center style='background: #000;padding: 10px;margin: 10px 0px;border: 1px solid #222;'>
 
Email : <input class='input-style' type='email' name='email' placeholder='...' required>

 
<button type="submit" class='submit-style' >submit</button>
 
<!--end submit -->
 
 </center>
</form>
 

 </div>