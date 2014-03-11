
<?php if(!$this->session->userdata('member_username')) { ?>
  <div class='box-content-center'>
                    Login member
                    </div>
          <div class='box'>
                            <div class='box-content'>
                                
				<form method='POST' charset='UTF-8' action='<?php echo base_url('login');?>' class="form-horizontal" >

                                <div class='box-content-left'>
                                <input type='text'name='username' placeholder='ID'><br>
                                <input type='password' name='password' placeholder='Password'><br>
                                <div class='checkbox'>
                                    
                                 </div>
                                </div>
                                
                                <div class='box-content-right'>
                                    <input type='submit' value='Masuk'>
                                </div>
                                
                                </form>
                                
                               </div>
                             </div>
                         
                    <div class='box-content-center'>
                        <a href='<?php echo base_url();?>lupa_password'>Lupa Password</a>  <a href='<?php echo base_url();?>daftar'>Daftar</a>
                    </div>
                    <a href='<?php echo base_url('daftar');?>'> <img src='<?php echo base_url('wdc-assets/site/img/signup.png');?>'></a>
                    <a href=''> <img src='<?php echo base_url('wdc-assets/site/img/reseller.png	');?>'></a>
                 
		  <div class='box-content-ss'>
                   <div class='title'>
                    Screenshoot
                   </div>
                   <img src='<?php echo base_url('wdc-assets/site/img/ss1.jpg');?>'>
                   </div>
        
<?php } else { ?>
 
                    <div class='box-content-center'>
                       Welcome, <?php echo $this->session->userdata('member_username');?><br>
		        </div>
                     <div class='box-content-body'>
<i class='fa fa-angle-right'></i>
<a href='<?php echo base_url('dashboard_member');?>'> Informasi Akun</a><br>
<i class='fa fa-angle-right'></i>
<a href='<?php echo base_url('ubah_password');?>'> Ubah Password</a><br>
		     </div>
                
        <br>
	   <div class='box-content-center'>
                      Status<br>
		        </div>
                     <div class='box-content-body'>
<i class='fa fa-angle-right'></i>
<a href='http://localhost/gm_shop/order' target='_blank'> My Order</a><br>
 <i class='fa fa-angle-right'></i>
<a href='http://localhost/gm_shop/voucher_code' target='_blank'> My Voucher</a><br>
<i class='fa fa-angle-right'></i>
<a href='http://localhost/gm_shop/shop' target='_blank'> Buy Voucher</a><br>
		     </div>
		     <br>
                    <div class='box-content-center'>
                       Game Ancient <br>
		        </div>
                        <div class='box-content-body'>
			 <i class='fa fa-angle-right'></i>
<a href='<?php echo base_url('login/logout');?>'> Logout</a><br>
 
			  
                
           </div>
<?php } ?>
		   