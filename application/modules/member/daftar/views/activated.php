<!DOCTYPE html>
    <html>
        <head>
            <title>Activated</title>
            <style>
                body{
                    background: #EEE;
                    font-family: arial;
                }
                a{
                    color: #0080ff;
                    text-decoration: none;
                }
                a:hover{
                    color: #0059b3;
                    text-decoration: none;
                }
                .box{
                    border: 1px solid #CCC;
                    margin: 20px auto 0px;
                    width: 600px;
                    height: 200px; 
                    box-shadow:0px 0px 5px #888;
                    background: #f8f8f8;
                    
                }
                .box center h2{
                    border-bottom: 1px dashed #CCC;
                    padding-bottom: 10px;
                }
            </style>
        </head>
        <body>
          <div class='box'>
            <center>
    <h2>Selamat, akun anda telah aktif !!!</h2><br><br>
    <a href='<?php echo base_url();?>'><< Back to Home</a> - <a href='<?php echo base_url('login');?>'>Go to Login Member >></a>
            </center>
</div>  
        </body>
    </html>
