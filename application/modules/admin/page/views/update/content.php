<div class='row-fluid'>
<div class="span12">
   
     <div class="page-header">
    <h4>
    <i class='fa fa-edit'></i> Pages <i class='fa fa-angle-right'></i>  <?php echo $this->uri->segment('4');?>
    <small>
    <ul class="nav nav-pills pull-right">
     
    <li>
      <a href="<?php echo base_url('berita/create');?>" target='_blank'>
      <i class='fa fa-angle-right'></i> View  <?php echo $this->uri->segment('4');?> on Web</a>
    </li>
    </ul>
    </small>
    
    </h4>   
  </div>
   
<?php echo $this->load->view('_layouts/menus');?>   

<?php if($this->session->flashdata('sukses')) { ?>
<div class='alert alert-info'>Berhasil update data</div>
<?php } ?>
    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('page/index').'/'.$this->uri->segment(3).'/'.$this->uri->segment(4);?>' class="form" >
        
       <?php $query = core::get_where('ac_page','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
  <!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' value='<?php echo $row['title'];?>' class='span9' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

 


<!-- start content -->
<div class='control-group <?php echo form_error('content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Content</strong></label>
<div class='controls'>
<textarea name='content' id='content' class='span10' placeholder='content'><?php echo $row['content'];?></textarea>
<?php echo form_error('content'); ?></div>
</div>
<!-- end content -->


<hr>
<!-- start created -->
<div class='control-group <?php echo form_error('created') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Date</strong></label>
<div class='controls'>
<div id="datetimepicker" class="input-append date">
    <input name='created' data-format="yyyy-MM-dd hh:mm:ss" value='<?php echo $row['created'];?>' type="text" readonly>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
<?php echo form_error('created'); ?></div>
</div>
<!-- end created -->

<!-- start created by -->
 
<input type='hidden' name='created_by' value='<?php echo $this->session->userdata('admin_id');?>' class='span5' placeholder='created by' required>

<!-- end created by -->

<!-- start created alias -->
<div class='control-group <?php echo form_error('created_alias') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Author</strong></label>
<div class='controls'>
<input type='text' name='created_alias' value='<?php echo $row['created_alias'];?>' class='span5' placeholder='created alias' required>
<?php echo form_error('created_alias'); ?></div>
</div>
<!-- end created alias -->
 

    <hr>   
<!--Submit -->
<div class="control-group ">
<div class="controls">
<button type='reset' class="btn"><i class='fa fa-times'></i> Reset</button>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class="fa fa-edit"></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>