 
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