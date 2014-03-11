<script type='text/javascript'>
$(function(){
 $("[data-confirm]").on("click submit", function(){
    return confirm($(this).data("confirm"));
 });
 
 $('.paid').click(function(){
  var header  = $(this).attr('title');
  var balance = $(this).parents('td').find('.balance').val();
  var harga   = $(this).parents('td').find('.harga').val();
  var id          = $(this).parents('td').find('.id').val();
  var reseller_id = $(this).parents('td').find('.reseller_id').val(); 
  
   $('.modal_header').html("<i class='fa fa-angle-right'></i> " + header);
   $('.balance-m').val(balance);
   $('.harga-m').val(harga);
   $('.harga_bayar-m').val(harga);
   $('.id-m').val(id);
   $('.reseller_id-m').val(reseller_id); 
 });
 
  $('.unpaid').click(function(){
  var header  = $(this).attr('title');
  var balance = $(this).parents('td').find('.balance').val();
  var harga_sisa   = $(this).parents('td').find('.harga_sisa').val();
  var id          = $(this).parents('td').find('.id').val();
  var reseller_id = $(this).parents('td').find('.reseller_id').val();
  var status      = $(this).parents('td').find('.status').val();
  
   $('.modal_header').html("<i class='fa fa-angle-right'></i> " + header);
   $('.balance-m').val(balance);
   $('.harga_sisa-m').val(harga_sisa);
   $('.id-m').val(id);
   $('.reseller_id-m').val(reseller_id);
   $('.status-m').val(status);
 });
 
 $('.set_to_paid').submit(function(){
     var harga = $('.harga-m').val();
     var harga_bayar = $('.harga_bayar-m').val();
    
     if (parseInt(harga_bayar) < parseInt(harga)) {
        $('.error').text('* Pembayaran reseller tidak bisa lebih sedikit dari harga balance');
        return false;
     }else{
      return true;
     }
     
  });
 
});

</script>