<script type='text/javascript'>
    $(function(){
    $( ".jumlah_balance" ).change(function() {
       var jumlah_balance = $(this).val();
       var harga_normal = jumlah_balance*1000;
       var discount = harga_normal*20/100;
       var harga_discount = harga_normal - discount;
       $('.harga_normal').text("Rp. "+convertToRupiah(harga_normal)+",-");
       $('.harga_discount').text("Rp. "+convertToRupiah(harga_discount)+",-");
    });
    });
    
function convertToRupiah(angka){
    var rupiah = '';
    var angkarev = angka.toString().split('').reverse().join('');
    for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
    return rupiah.split('',rupiah.length-1).reverse().join('');
}
</script>