 
 <?php foreach(core::get_where('ac_peraturan','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row){ ?>
  
 
        
<div class='news'>
  
    <div class='news-title'>
      <?php echo $row->title;?>
    </div>
    
    <div class='news-content'>
        <div class='item'>
            
               
               
          
            <div class='data'>
<?php echo $row->content;?>
 
            </div>
          
        </div>
       
     
    
  
    </div>
    </div>
    <div style='padding: 5px 0px 5px 0px;font-size:11px;color: #fff;'>
 Update on <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB
 </div>
 <?php } ?>


 
  
     
     