<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice</title>
<link rel="stylesheet" href="<?php echo base_url();?>wdc-assets/core/css/bootstrap3.css">
    
	<!--<style>
	@import url(http://fonts.googleapis.com/css?family=Bree+Serif);
	body, h1, h2, h3, h4, h5, h6{
		font-family: 'Bree Serif', serif;
	}
	</style>-->
        <style>
            body{
                background: #EEE;
            }
            .container{
                background: #FFF;
		min-height:700px;
            }
        </style>
</head>
<body>

      
            <?php $query = core::get_where('mb_order','member',array(
                            'member_id' => $this->uri->segment(3),
			    'id'        => $this->uri->segment(4),
                            'order_code'=> $this->uri->segment(5),
                            ),1);
            $row = $query->row(1);
	    if($query->num_rows() == 0){
		redirect('order_member');
	    }
	    ?>
        
           
            
	<div class="container" style='width: 980px;border-right: 1px solid #CCC;border-left: 1px solid #CCC;'>

		<div class="row">
			<div class="col-xs-6">
			  <h1>
			    <a href="">
			      Ancient Game
			    </a>
			  </h1>
			</div>
			<div class="col-xs-4 col-xs-offset-2 text-right">
                          
            <center>   
                <h4>
		<?php if($row->status == 'paid') { ?>
		<span class='label label-success'>
		Paid
		</span>
		<?php } else { ?>
		<span class='label label-danger'>
		Unpaid
		</span>
		<?php } ?>
		
		</h4>
		    
<b>Bank Transfer</b><br><br>

<?php foreach(core::get_all('ac_databank','ancient')->result() as $rows){ ?>
Bank : <?php echo $rows->bank;?><br>
Atas Nama : <?php echo $rows->atas_nama;?><br>
Nomor Rekening : <?php echo $rows->no_rek;?><br>
Cabang : <?php echo $rows->cabang;?>
<?php } ?>
		</center>
			</div>
		</div>
		<hr>
<center><h3>INVOICE #<?php echo $row->id;?></h3>
 Tanggal Invoice : <?php echo date("d/m/Y", strtotime($row->created));?><br>
 Tanggal Pembayaran :  <?php if($row->status == 'paid') { ?>
 <?php echo date("d/m/Y", strtotime($row->modified));?>
 <?php } else { ?>
 -
 <?php } ?>
</center>
<hr>
		  <div class="row">
		    <div class="col-xs-12">
			<table class='table table-bordered'  style='border: 4px double #CCC;' cellpadding="10">
			    
			  
			    <tr>
				<td style='width: 400px;'>
		<center>
<strong>Invoiced To</strong><br>
<?php foreach(core::get_where('mb_member','member',array('id' => $this->uri->segment(3)) )->result() as $rowx){ ?>
Bank : <?php echo $rowx->username;?><br>
Email : <?php echo $rowx->email;?><br>
HP : <?php echo $rowx->no_telepon;?><br> 
<?php } ?>

		</center>
				</td>
				<td style='width: 400px;'>
		<center>
<strong>Pay To</strong><br>
<?php foreach(core::get_all('ac_databank','ancient')->result() as $rows){ ?>
Bank : <?php echo $rows->bank;?><br>
Atas Nama : <?php echo $rows->atas_nama;?><br>
Nomor Rekening : <?php echo $rows->no_rek;?><br>
Cabang : <?php echo $rows->cabang;?>
<?php } ?>
		</center>
				</td>
			    </tr>
			    
			</table>
		     
		    </div>
		   
 <div class="col-xs-12">
	   <table class="table table-bordered">
        <thead>
          <tr class='active'>
            <th>Vouher</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Sub Total</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach(core::get_where('mb_order','member',array(
                            'member_id' => $this->uri->segment(3),
                            'order_code'=> $this->uri->segment(5),
                            ))->result() as $row2) { ?>
            
          <tr>
            <td><?php echo $row2->voucher;?> K</td>
            <td class="text-right">Rp. <?php echo core::rupiah($row2->harga);?>,-</td>
             <td class="text-right"><?php echo $row2->jumlah;?></td>
              <td class="text-right">Rp. <?php echo core::rupiah($row2->sub_total);?>,-</td>
          </tr>
          <?php } ?>
        
	    <tr class='active'>
	    <td colspan='3' class='text-right'>
		<strong>Sub-Total</strong>
	    </td>
	    <td  class='text-right'>
		<strong>Rp. <?php echo core::rupiah($row->total);?>,-</strong>
	    </td>
	 </tr>
	    <tr class='active'>
	    <td colspan='3' class='text-right'>
		<strong>Diskon</strong>
	    </td>
	    <td  class='text-right'>
		<strong>-</strong>
	    </td>
	 </tr>
          <tr class='active'>
	    <td colspan='3' class='text-right'>
		<strong>Total</strong>
	    </td>
	    <td  class='text-right'>
		<strong>Rp. <?php echo core::rupiah($row->total);?>,-</strong>
	    </td>
	 </tr>
        </tbody>
      </table>
<br>
    <h4><strong>Pembayaran</strong></h4>
    	         <table class="table table-bordered">
        <thead>
           <tr class='active'>
            <th>Tanggal Pembayaran</th>
            <th>Sub-Total</th>
          </tr>
        </thead>
        <tbody>
           
          <tr>
	    <?php if($row->status == 'unpaid') { ?>
	       <tr><td colspan=2> Belum ada Pembayaran ...</td></tr>
	    <?php } else { ?>
            <td>
	    
	    <?php echo date("d/m/Y", strtotime($row->modified));?>
	    
	    </td>
	    <td>
		Rp. <?php echo core::rupiah($row->harga);?>,-
	    </td>
	    <?php } ?>
	  </tr>
          <tr class='active'>
	    <td class='text-right'>
		<strong>Total</strong>
	    </td>
	    <td>
		 <?php if($row->status == 'paid') { ?>
		<strong>Rp. <?php echo core::rupiah($row->harga);?>,-</strong>
		 <?php } else { ?>
		 -
		   <?php } ?>
	    </td>
	 </tr>
        </tbody>
      </table>
    <br><br>
		<hr>
		   <center> www.ancientgame.com</center>
		    <hr>
		  </div>
		
	</div>

</body>
</html>
 
            
         
          