<span class='span9'>
<fieldset>

    <label>Title</label>
    <div class="input-control text <?php echo form_error('title') == TRUE ? "error-state" : "";?>" data-role="input-control">
    <input type="text" name='title' value='<?php echo $this->uri->segment(3) != '' ? $row->title : set_value('username');?>' placeholder="Title ..">
    <button class="btn-clear" tabindex="-1"></button>
    <?php echo form_error('title');?>
    </div>
    
    
    <label>Date</label>
    <div class="input-control text <?php echo form_error('date') == TRUE ? "error-state" : "";?>" data-role="datepicker" data-date="<?php echo $this->uri->segment(3) != '' ? date("Y-m-d", strtotime($row->date)) : date('Y-m-d');?>" data-format='yyyy-mm-dd' data-other-days="1">
    <input type="text" name='date' value='<?php echo $this->uri->segment(3) != '' ? $row->date : set_value('date');?>' placeholder='Date ..'>
    <button class="btn-date"></button>
    <?php echo form_error('date');?>
    </div>
   
    <hr>
    <a class='button' href='<?php echo base_url('crud');?>'><i class='icon-cancel-2'></i> Cancel</a>
    <?php if($this->uri->segment(3) == ''){ ?>
    <button class='primary' type="submit"> <i class="icon-rocket on-left"></i> Submit </button>
    <?php } else { ?>
    <button class='warning' type="submit"> <i class="icon-loop on-left"></i> Update </button>
    <?php } ?>
</fieldset>
</span>