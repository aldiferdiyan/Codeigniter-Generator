  <?php foreach (core::get_where('mb_member','member',array('username' => $this->session->userdata('member_username')),1)->result() as $row) { ; ?>
   <div class='box-content-post'>
                       Welcome, <?php echo $this->session->userdata('member_username');?>
                       <span style='float:right;'?>Last login : <?php echo date("d M Y H:i", strtotime($row->last_login));?> WIB</span>
		        </div>
 
<br>
    <center><b>Your Complete profile</b></center><br> 
    
<table cellpadding='5'>
<tbody>

<tr><td>username</td>
<td><?php echo $row->username;?></td></tr>
 
<tr><td>email</td>
<td><?php echo $row->email;?></td></tr>
<tr><td>no telepon</td>
<td><?php echo $row->no_telepon;?></td></tr>
<tr><td>nama</td>
<td><?php echo $row->nama;?></td></tr>
<tr><td>tgl lahir</td>
<td><?php echo $row->tgl_lahir;?></td></tr>

<tr><td>jenis kelamin</td>
<td><?php echo $row->jenis_kelamin;?></td></tr>
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>Status</td> 
<td><?php echo $row->status;?> - 
<?php if($row->activated == 0) { ?>
Email belum di verifikasi
<?php } else { ?>
Telah di verifikasi
<?php } ?>
</td></tr>
 
 
 
<?php } ?></tbody></table>