  <div class="page-header">
    <h4>
    <i class='fa fa-pencil'></i> setting_general
    
    <small>
    <ul class="nav nav-pills pull-right">
    <li class='<?php echo $this->uri->segment(2) != 'create' ? 'active' : ''; ?>'>
      <a href="<?php echo base_url('setting_general');?>"><i class='fa fa-book'></i> List</a>
    </li>
    <li class='<?php echo $this->uri->segment(2) == 'create' ? 'active' : ''; ?>'>
      <a href="<?php echo base_url('setting_general/create');?>"><i class='fa fa-pencil'></i> Add New</a>
    </li>
    </ul>
    </small>
    
    </h4>   
  </div>