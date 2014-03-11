<div class='row-fluid'>
<div class="span12" style='background: #000;padding: 10px;'>


   
<?php echo $this->load->view('_layouts/menus');?>
<?php if(validation_errors()){?>
<div class='alert-error'><center><b>Terjadi kesalahan</b></center></div><br><br>
<?php }?>
<!--START FORM-->
<form method='POST' charset='UTF-8' action='<?php echo base_url('daftar');?>' id='form' class="form-horizontal" >
        
       <!-- start username -->
 
<div class='control-group <?php echo form_error('username') ? 'error' : ''; ?>'>
<label class='control-label' >Member ID<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text'  name='username' value='<?php echo set_value('username'); ?>' placeholder='Member ID'>
<?php echo form_error('username'); ?></div>
</div>
 
<!-- end username -->

<!-- start password -->
<div class='control-group <?php echo form_error('password') ? 'error' : ''; ?>'>
<label class='control-label' >password<span class='text-error'>*</span></label>
<div class='controls'>
<input type='password' name='password' id='password'  placeholder='password' >
<?php echo form_error('password'); ?></div>
</div>
<!-- end password -->

<!-- start password -->
<div class='control-group <?php echo form_error('password_konfirmasi') ? 'error' : ''; ?>'>
<label class='control-label' >konfirmasi password<span class='text-error'>*</span></label>
<div class='controls'>
<input type='password' name='password_konfirmasi'  placeholder='Konfirmasi Password' >
<?php echo form_error('password_konfirmasi'); ?></div>
</div>
<!-- end password -->

<!-- start email -->
<div class='control-group <?php echo form_error('email') ? 'error' : ''; ?>'>
<label class='control-label' >email<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text' name='email' class='' value='<?php echo set_value('email'); ?>' placeholder='email' >
<?php echo form_error('email'); ?></div>
</div>
<!-- end email -->
 
<!-- start email -->
<div class='control-group <?php echo form_error('nama') ? 'error' : ''; ?>'>
<label class='control-label' >Nama Member<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text' name='nama' class='' value='<?php echo set_value('nama'); ?>' placeholder='nama'>
<?php echo form_error('nama'); ?></div>
</div>
<!-- end email -->

<!-- start telp -->
<div class='control-group <?php echo form_error('no_telepon') ? 'error' : ''; ?>'>
<label class='control-label' >No Telepon<span class='text-error'>*</span></label>
<div class='controls'>
<input type='text' name='no_telepon' class='' value='<?php echo set_value('no_telepon'); ?>' placeholder='No Telepon' >
<?php echo form_error('no_telepon'); ?></div>
</div>
<!-- end telp -->


<!-- start email -->
<div class='control-group <?php echo form_error('jenis_kelamin') ? 'error' : ''; ?>'>
<label class='control-label' >Jenis Kelamin<span class='text-error'>*</span></label>
<div class='controls'>
<label class="radio">
  <input type="radio"   name="jenis_kelamin" value="laki - laki" <?php echo set_radio('jenis_kelamin', 'laki - laki'); ?>>
  Laki-laki
</label>
<label class="radio">
  <input type="radio"   name="jenis_kelamin" value="Perempuan" <?php echo set_radio('jenis_kelamin', 'Perempuan'); ?>>
  Perempuan
</label>
<label for="jenis_kelamin" class="error" style="display:none;">Please choose one.</label>

</div>

</div>
<!-- end email -->
       
       
<!-- start email -->
<div class='control-group
<?php echo form_error('tanggal') ? 'error' : ''; ?>
<?php echo form_error('bulan') ? 'error' : ''; ?>
<?php echo form_error('tahun') ? 'error' : ''; ?>'>
    
<label class='control-label' >Tanggal Lahir<span class='text-error'>*</span></label>
<div class='controls'>
<select name='tanggal' style='width:100px;' >
    <option selected='selected' disabled='disabled'>Tanggal</option>
    <?php for($i = 1;$i < 32; $i++) { ;?>
    <option value='<?php echo $i;?>' <?php echo set_select('tanggal', $i ); ?>><?php echo $i;?></option>
    <?php } ?>
</select>

<select name='bulan' style='width:100px;'>
    <option selected='selected' disabled='disabled'>Bulan</option>
    <option value='01' <?php echo set_select('bulan', '01'); ?>>Januari</option>
    <option value='02' <?php echo set_select('bulan', '02'); ?>>Februari</option>
    <option value='03' <?php echo set_select('bulan', '03'); ?>>Maret</option>
    <option value='04' <?php echo set_select('bulan', '04'); ?>>April</option>
    <option value='05' <?php echo set_select('bulan', '05'); ?>>Mei</option>
    <option value='06' <?php echo set_select('bulan', '06'); ?>>Juni</option>
    <option value='07' <?php echo set_select('bulan', '07'); ?>>Juli</option>
    <option value='08' <?php echo set_select('bulan', '08'); ?>>Agustus</option>
    <option value='09' <?php echo set_select('bulan', '09'); ?>>September</option>
    <option value='10' <?php echo set_select('bulan', '10'); ?>>Oktober</option>
    <option value='11' <?php echo set_select('bulan', '11'); ?>>November</option>
    <option value='12' <?php echo set_select('bulan', '12'); ?>>Desember</option>
</select>

<select name='tahun' style='width:100px;'>
    <option selected='selected' disabled='disabled'>Tahun</option>
    <?php for($i = date('Y') - 60;$i < date('Y'); ++$i) { ;?>
    <option value='<?php echo $i;?>' <?php echo set_select('tahun', $i); ?>><?php echo $i;?></option>
    <?php } ?>
</select>
<?php echo form_error('tanggal'); ?>
<?php echo form_error('bulan'); ?>
<?php echo form_error('tahun'); ?>

<label for="tanggal" class="error" style="display:none;">Please choose one.</label>
<label for="bulan" class="error" style="display:none;">Please choose one.</label>
<label for="tahun" class="error" style="display:none;">Please choose one.</label>
</div>




</div>
<!-- end email -->
       
       
       <!-- start email -->
<div class='control-group <?php echo form_error('security_code') ? 'error' : ''; ?>'>
<label class='control-label' > security code<span class='text-error'>*</span></label>
<div class='controls'>
 <?php echo $image;?>
<br><br>
<input type="text" name='security_code' placeholder="Security Code ..." class="form-control validate[required]">
<?php echo form_error('security_code'); ?>
</div>
</div>
<!-- end email -->   
       
<!-- start email -->
<div class='control-group '>
<label class='control-label' > </label>
<div class='controls'>
<label class="checkbox">
  <input type="checkbox" name="persetujuan" id="optionsRadios1" value="setuju">
  Saya telah membaca <a style='color: #9dceff;' href='<?php echo base_url();?>peraturan_member/index/9'>persetujuan Pemain</a> dan setuju mentaatinya
</label>
<?php echo form_error('persetujuan'); ?>

<label for="persetujuan" class="error" style="display:none;">Please choose one.</label>
</div>
</div>
<!-- end email -->       

<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type="submit" class="btn btn-primary btn-large"><i class="fa fa-share"></i> Daftar Sekarang</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>
