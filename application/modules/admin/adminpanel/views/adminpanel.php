
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/core/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/core/plugin/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/core/css/login.css">
   
  </head>
  <body>
    <div class="navbar navbar-static-top">
    <div class="navbar-inner">
    <div class="brand"><i class='fa fa-lock'></i> AdminPanel</div>
    
    </div>
    </div>
 
<div class="container">
  <div class='form-container'>
        <div class="form-signin-heading text-muted"> Sign In to AdminPanel</div>
	
	<form class="form-signin" action="<?php echo base_url();?>adminpanel" method="POST" charset="utf-8">
		<center>
		<?php if($this->session->flashdata('login_error')) { ?>
		  <div class="alert alert-error">*Username or password is Wrong !!</div>
		<?php } ?>
		
		<div class="control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?><?php echo form_error('username_email') ? 'error' : ''; ?>">
		<?php echo form_error('username_email'); ?> 
		<div class="input-prepend">
		<span class="add-on"><i class='fa fa-user'></i></span>
		<input class="span3" name='username_email' type="text" placeholder="Username or Email">
		</div>
		</div>
		<div class="control-group <?php echo $this->session->flashdata('login_error')? 'error' : '';?><?php echo form_error('password') ? 'error' : ''; ?>">
		<?php echo form_error('password'); ?>
		<div class="input-prepend">
		<span class="add-on"><i class='fa fa-lock'></i></span>
		<input class="span3" name='password' type="password" placeholder="Password">
		</div>
                </div>
		</center>
		
     
   <button data-loading-text="Please wait..."  class="btn btn-primary login btn-large btn-block" type="submit">
		       Sign In
		</button>
 
		
		
	</form>
	<br>
	
	 <?php echo admin::im();?>
 
  </div>
</div>
<script type='text/javascript' src="<?php echo base_url();?>wdc-assets/core/js/jquery-2.0.3.min.js"></script>
<script type='text/javascript' src="<?php echo base_url();?>wdc-assets/core/js/bootstrap.min.js"></script>
<script>
  $('.login').on('click', function(){
      $(this).button('loading');
  });
</script>
  </body>
</html>
