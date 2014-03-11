<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('peraturan/update').'/'.$this->uri->segment(3);?>' class="form" >
        
       <?php $query = core::get_where('ac_peraturan','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >
<!-- start title -->
<div class='control-group <?php echo form_error('title') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Title</strong></label>
<div class='controls'>
<input type='text' name='title' class='span5' value='<?php echo $row['title'];?>' placeholder='title' required>
<?php echo form_error('title'); ?></div>
</div>
<!-- end title -->

<!-- start content -->
<div class='control-group <?php echo form_error('content') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Content</strong></label>
<div class='controls'>
<textarea name='content' id='content' class='span5'  placeholder='content' required><?php echo $row['content'];?><?php echo set_value('content');?></textarea>
<?php echo form_error('content'); ?></div>
</div>
<!-- end content -->


       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('peraturan');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>