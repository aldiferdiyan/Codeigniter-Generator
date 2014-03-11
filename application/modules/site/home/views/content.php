
<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <?php foreach(core::get_all('ac_slider','ancient')->result() as $row){ ?>
    <li>
      <img src="<?php echo $row->img;?>" />
    </li>
   <?php } ?>
  </ul>
</div>



<div class='news'>
    <div class='news-title'>
     News dan Event
    </div>
    
  <?php foreach(core::get_join('ac_category','ac_berita','ac_berita.category_id = ac_category.id','','ancient',5)->result() as $row){ ?>
    <div class='news-content'>
        <div class='item'>
            <div class='title'>
               
             <i class="fa fa-angle-double-right"></i>
             <a href='<?php echo base_url();?>news_detail/index/<?php echo $row->id;?>'><?php echo $row->title;?></a>
             <span class='date'><?php echo $row->category;?> - <?php echo date("l, d F Y - H:i",strtotime($row->created));?> WIB</span>
            </div>
          
            <div class='data'>
<?php echo $row->intro_content;?>
 
            </div>
          
        </div>
       
  
    
  
    </div>
    
 <?php } ?>
  
</div>
  <div class='more'>
 <a href='<?php echo base_url('news');?>'>More Information</a>
</div>
       
  
     
     