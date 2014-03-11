<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('rs_reseller','reseller',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
 
<tr><td>nama</td>
<td><?php echo $row->nama;?></td></tr>
<tr><td>balance</td>
<td><?php echo $row->balance;?></td></tr>
<tr><td>username</td>
<td><?php echo $row->username;?></td></tr>
 
<tr><td>email</td>
<td><?php echo $row->email;?></td></tr>
<tr><td>no telepon</td>
<td><?php echo $row->no_telepon;?></td></tr>
<tr><td>tgl lahir</td>
<td><?php echo $row->tgl_lahir;?></td></tr>
<tr><td>jenis kelamin</td>
<td><?php echo $row->jenis_kelamin;?></td></tr>
 
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>modified</td>
<td><?php echo $row->modified;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status;?></td></tr>
 
<tr><td>last ip</td>
<td><?php echo $row->last_ip;?></td></tr>
<tr><td>last login</td>
<td><?php echo $row->last_login;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>