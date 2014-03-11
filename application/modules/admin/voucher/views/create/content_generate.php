  <hr>
    <form action='<?php echo base_url('voucher/insert_voucher');?>' method='POST' charset='UTF-8'>
    <table class='table table-condensed table-hover table-striped'>
        <thead>
            <tr>
                <th style='width: 50px;'>No</th>
                 <th>Voucher Code</th>
                 <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
 
   <?php for($i = 1;$i <= $jumlah;$i++) { ?>
   <?php $generate = generate($nilai);?>
   <tr>     
	<td><?php echo $i;?></td>
        <td>
        <?php echo $generate['voucher']; ?>
        <input type='hidden' name='x[<?php echo $i;?>][code]' value='<?php echo $generate['code']; ?>'>
        </td>
        <td>
        <?php echo $generate['nilai']; ?>K
        <input type='hidden' name='x[<?php echo $i;?>][nilai]'  value='<?php echo $generate['nilai']; ?>'>
        </td>
   </tr>
    <?php } ?>
        </tbody>
    </table>
    <hr>
    <center>
    <a class='btn' href='<?php echo base_url('voucher/create');?>'>Cancel</a>
    <button type='submit' class='btn btn-primary'>Submit to Database</button>
    </center>
    </form>
   
    <?php	    
    // Function to generate unique ID 
    function generate($nilai)
    {
	$create = strtoupper(uniqid(sha1(sha1(sha1(sha1(sha1(sha1(md5(md5(md5(md5(md5(md5(md5(md5(md5(md5(uniqid(date('YmdHis'),true))))))))))))))))))); 
	$voucher = 
	    substr($create,0,4) . ' - ' . 
	    substr($create,4,4) . ' - ' . 
	    substr($create,8,4). ' - ' . 
	    substr($create,12,4). ' - ' . 
	    substr($create,16,4). ' - ' . 
	    substr($create,20,4);
        $code = substr($create,0,24);
        
	return array('voucher' => $voucher, 'nilai' => $nilai, 'code' => $code);
    }
    // End of function
    ?>