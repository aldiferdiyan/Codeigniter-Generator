 <div class='nav'>
                         <ul class='content-nav'>
                        <?php foreach(core::get_all('ac_menus','ancient')->result() as $row) { ?>
                            <li><a href='<?php echo $row->url;?>'><?php echo $row->title;?></a></li>
                            
                        <?php } ?>
                        </ul>
                     </div>
                