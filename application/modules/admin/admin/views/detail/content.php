<div class='row-fluid'>
<div class="span12">
  <?php echo $this->load->view('_layouts/menus');?>
  
  
        <table class='table table-striped table-bordered table-hover table-condensed'>
<tbody><?php foreach (core::get_where('ac_admin','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row) { ; ?>
 
<tr><td>username</td>
<td><?php echo $row->username;?></td></tr>
<tr><td>email</td>
<td><?php echo $row->email;?></td></tr>
<tr><td>no telepon</td>
<td><?php echo $row->no_telepon;?></td></tr>
 
 
<tr><td>created</td>
<td><?php echo $row->created;?></td></tr>
<tr><td>status</td>
<td><?php echo $row->status == '1' ? "Super Admin" : "User";?></td></tr>


<tr><td>last ip</td>
<td><?php echo $row->last_ip;?></td></tr>
<tr><td>last login</td>
<td><?php echo $row->last_login;?></td></tr>
<?php } ?></tbody></table>
        
</div>
</div>