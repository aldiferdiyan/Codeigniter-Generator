<!DOCTYPE html>
    <html>
        <head>
            <title>RF Online - Ansient Game</title>
            <!--include js and css-->
            <?php echo $this->load->view('site/_include');?>
            <?php echo $this->load->view('site/_js');?>
           <!-- end include js and css-->
            
           <!-- include from module-->
            <?php echo $include;?>
           <!-- end include from module-->
            
        </head>
        <body>
        <div class='body2'>
            <div class='divider'></div>
        
           <!--top navigation-->
           <?php echo $this->load->view('site/_top_nav');?>
          <!-- end top navigation-->
           
         <div class='container'>
                
                <!--header - logo etc-->
                <div class='header'>
                <?php echo $this->load->view('site/_header');?>
                </div>
                <!--end header-->
                
               <!-- center navigation-->
                <?php echo $this->load->view('site/_center_nav');?>
                <!-- end center navigation-->
                
            <div class='content'>
                     
                
                <div class='left'>
                <?php echo $content;?>     
                </div>

                <div class='right'>
                <?php echo $this->load->view('site/_sidebar');?>
                </div>
                
            </div>
            
        </div>
                 
 
                <div class='footer'>
                    <?php echo $this->load->view('site/_footer');?>
                </div>
                
             <div class='divider'></div>
            
            </div>
        </body>
    </html>


        </body>
    </html>