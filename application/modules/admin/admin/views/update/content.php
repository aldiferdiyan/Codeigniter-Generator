<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('admin/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('ac_admin','ancient',array('id' => $this->uri->segment(3)),1); ?>
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

<!-- start username -->
<div class='control-group <?php echo form_error('username') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Username</strong></label>
<div class='controls'>
<input type='text' name='username' class='span5' value='<?php echo $row['username'];?>' placeholder='username' required>
<?php echo form_error('username'); ?></div>
</div>
<!-- end username -->



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

<!-- start tgl lahir -->
<div class='control-group <?php echo form_error('tgl_lahir') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Tgl lahir</strong></label>
<div class='controls'>
<input type='text' name='tgl_lahir' class='span5' value='<?php echo $row['tgl_lahir'];?>' placeholder='tgl lahir' required>
<?php echo form_error('tgl_lahir'); ?></div>
</div>
<!-- end tgl lahir -->

<!-- start jenis kelamin -->
<div class='control-group <?php echo form_error('jenis_kelamin') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Jenis kelamin</strong></label>
<div class='controls'>
<input type='text' name='jenis_kelamin' class='span5' value='<?php echo $row['jenis_kelamin'];?>' placeholder='jenis kelamin' required>
<?php echo form_error('jenis_kelamin'); ?></div>
</div>
<!-- end jenis kelamin -->

<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Created</strong></label>
<div class='controls'>
<input type='text' name='created' class='span5' value='<?php echo $row['created'];?>' placeholder='created' required>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start status -->
<div class='control-group <?php echo form_error('status') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Status</strong></label>
<div class='controls'>
<input type='text' name='status' class='span5' value='<?php echo $row['status'];?>' placeholder='status' required>
<?php echo form_error('status'); ?></div>
</div>
<!-- end status -->

<!-- start avatar -->
<div class='control-group <?php echo form_error('avatar') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Avatar</strong></label>
<div class='controls'>
<input type='text' name='avatar' class='span5' value='<?php echo $row['avatar'];?>' placeholder='avatar' required>
<?php echo form_error('avatar'); ?></div>
</div>
<!-- end avatar -->

<!-- start description -->
<div class='control-group <?php echo form_error('description') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Description</strong></label>
<div class='controls'>
<textarea name='description' class='span5'  placeholder='description' required><?php echo $row['description'];?><?php echo set_value('description');?></textarea>
<?php echo form_error('description'); ?></div>
</div>
<!-- end description -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('admin');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>