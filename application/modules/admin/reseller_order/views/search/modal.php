<form method='POST' class='set_to_paid' action='<?php echo base_url('reseller_order/update');?>' charset='UTF-8'>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal_header"></h3>
  </div>
  <div class="modal-body">
    <input type='hidden' name='id' class='id-m'>
    <input type='hidden' name='reseller_id' class='reseller_id-m'>
    <input type='hidden' name='status' class='status-m'>
        
    <table cellpadding=10>
        <tr>
    <td>Balance</td><td><input type='text' name='balance' class='balance-m' readonly></td>
        </tr>
        <tr>
    <td>Harga balance</td><td> <input type='text' name='harga' class='harga-m' readonly></td>
        </tr>
        <input type='hidden' name='harga_bayar' class='harga_bayar-m' placeholder='harga bayar ...'> 
        
    </table>
    <p class='error text-error'></p>
    <hr>
    <p><b>Note : </b>System akan otomatis mengirimkan nilai balance baru ke reseller yang sudah di set paid</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button  type='submit' class="btn btn-primary">Set to paid</button>
  </div>
</div>
</form>


<!--UNPAID-->
<form method='POST' action='<?php echo base_url('reseller_order/update');?>' charset='UTF-8'>
<!-- Modal -->
<div id="unpaid" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="modal_header"></h3>
  </div>
  <div class="modal-body">
    <input type='hidden' name='id' class='id-m'>
    <input type='hidden' name='reseller_id' class='reseller_id-m'>
    <input type='hidden' name='status' class='status-m'>
    <input type='hidden' name='balance' class='balance-m' readonly>
    <input type='hidden' name='harga_sisa' class='harga_sisa-m' readonly>    
    <p><b>Note : </b><br>
    System akan mengurangi nilai balance reseller dan men-set order balance ini ke unpaid  </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button  type='submit' class="btn btn-danger">Set to unpaid</button>
  </div>
</div>
</form>