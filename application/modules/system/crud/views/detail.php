 <?php include('_head.php');?>
 
 <?php $query = crudmodel::getWhere(array('id' => $id));?>
 <?php $row = $query->row();?>
<table class="table striped hovered">
    <tbody>
         <tr>
            <td>ID</td>
            <td><?php echo $row->id;?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php echo $row->title;?></td>
        </tr>
         <tr>
            <td>Date</td>
            <td><?php echo $row->date;?></td>
        </tr>
    </tbody>
</table>

<a class='button' href='<?php echo base_url('crud');?>'><i class='icon-backspace'></i> Back</a>