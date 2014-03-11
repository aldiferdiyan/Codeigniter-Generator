<?php if($this->session->flashdata('sukses')){ ?>
  <div class='alert alert-success'>Success Create Models</div>
<?php } ?>
<h2>Generate Model</h2>

<form method='POST' action='<?php echo base_url('generator/model');?>'>
    <input type='text' name='database' placeholder='nama database..'><br>
      <input type='text' name='table' placeholder='nama table ..'><br>
    <input type='text' name='model' placeholder='nama model ..'><br>
        <input type='submit' class='btn' value='Generate'>
</form>