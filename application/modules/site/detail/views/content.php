 
 <?php foreach(core::get_where('ac_berita','ancient',array('id' => $this->uri->segment(3)),1)->result() as $row){ ?>
  
 <div style='padding: 5px 0px 5px 0px;font-size:12px;color: cyan;'>
 Update on <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB
 </div>
        
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
    
 <?php } ?>

</div>
 
  
     
     