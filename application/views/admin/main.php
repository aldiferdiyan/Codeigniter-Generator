<!DOCTYPE html>
<html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                Adminpanel
            </title>
            <?php echo $this->load->view('admin/_include');?>
            <?php echo $this->load->view('admin/_js');?>
            
            <?php echo $include;?>
            
        </head>
        <body class="metro">
                    <?php echo $this->load->view('admin/_header');?>
                <div class="grid fluid">
                      
                        
                        <div class="row">
                        <div class="span3" >
                            <?php echo $this->load->view('admin/_sidebar');?>
                        </div>
                        <div class="span9" >
                                <?php echo $content;?>
                        </div>
                      
                         
                        </div>
                       
             <?php echo $this->load->view('admin/_footer');?>
             
                </div>
            
        </body>
    </html>
