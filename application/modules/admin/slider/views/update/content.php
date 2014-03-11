<div class='row-fluid'>
<div class="span12">
   
<?php echo $this->load->view('_layouts/menus');?>   

    <!--START FORM-->
    <form method='POST' charset='UTF-8' action='<?php echo base_url('slider/update').'/'.$this->uri->segment(3);?>' class="form form-horizontal" >
        
       <?php $query = core::get_where('ac_slider','ancient',array('id' => $this->uri->segment(3)),1); ?>
<?php $row = $query->row_array();?>
<input type='hidden' name='id' value='<?php echo $row['id'];?>' >



<!-- start image -->
<div class='control-group <?php echo form_error('img') ? 'error' : ''; ?>'>
<label class='control-label' ><strong>Slider</strong></label>
<div class='controls'>
    <div class="input-append">
 <input type='text' value='<?php echo $row['img'];?>' name='img' id='images' placeholder='File images ...' >
                
<a href="javascript:open_popup('<?php echo base_url();?>wdc-assets/core/plugin/filemanager-slider/dialog.php?type=1&popup=1&sort_by=date&subfolder=&editor=mce_0&field_id=images')" class="btn" type="button">
<i class="fa fa-folder-open-o"></i> Browse
</a>

</div>
    <script>
function open_popup(url)
{
        var w = 880;
        var h = 570;
        var l = Math.floor((screen.width-w)/2);
        var t = Math.floor((screen.height-h)/2);
        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}
    </script>
   <?php echo form_error('img'); ?></div>
</div>
<!-- end image -->


 

       
<!--Submit -->
<div class="control-group ">
<div class="controls">
<a href='<?php echo base_url('slider');?>' class="btn"><i class='fa fa-times'></i> Cancel</a>
<button data-loading-text="Loading ..." type="submit" class="submit btn btn-warning"><i class='fa fa-edit'></i> Update</button>
</div>
</div>
<!--end submit -->

    </form>
    <!--END FORM-->
</div>
</div>