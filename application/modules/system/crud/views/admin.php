<?php include('_head.php');?>


<style>
thead, tfoot {
    display: table-header-group;
}
</style>
<table class='table hovered' id="dataTable">
    <thead>
    <tr>
       <th style='width:80px;text-align: left'>#</th>
        <th style='text-align:left;' >Title</th>
        <th style='width:130px;text-align: center'>Action</th>
    </tr>
    </thead>
    
    <tbody>
       
    </tbody>
     

</table>
<script>
         $(function(){
      
                var oTable = $('#dataTable').dataTable( {
                        "bProcessing": true,
                        "bServerSide": true, 
			"sPaginationType": "full_numbers",
                        "sServerMethod": "GET",
                        "sAjaxSource": "<?php echo base_url();?>crud/getJson",
                        //"aaSorting": [[ 1, "desc" ]],
                        "aoColumns": [
                            { "mData": 'no',  'bSortable': false },
                            { "mData":  [1]},
                            { "mData" : [0],  'bSortable': false, "mRender": function(id) {
                               centerStart = "<center>";
                               Delete = "<a href='#' title='delete' id='"+id+"' class='del text-alert'><i class='icon-remove'></i></a> ";
                               Edit   = "<a href='crud/update/"+id+"' title='Edit'   class='text-warning'><i class='icon-pencil'></i></a> ";
                               View   = "<a href='crud/detail/"+id+"' title='View'   class='text-info'><i class='icon-eye'></i></a>";
                               centerEnd = "</center>";
                               Actions = centerStart + Delete + Edit + View + centerEnd;
                               return Actions;
                            }},
                         ],
                          
                        
                    });
                        
	 
                 // delete rows
                 $('#dataTable').on("click",".del",function () {
                    var promt = confirm("Are you sure want to delete this ? ");
                        if (promt == true) {
                            var notify   =  $.Notify({style: {background: 'red', color: 'white'}, content: "Deleting ..."});
                            var idDelete = $(this).attr('id');
                            $.ajax({
                              type: "POST",
                              url : "crud/delete",
                              data: {id: idDelete},
                              success: function(data)
                              {
                                if (data == "success") {
                                    notify.close();
                                    oTable.fnDraw();
                                }
                                else
                                {                        
                                    alert('Terjadi Kesalahan, Mohon Ulangi lagi ...');
                                }
                              }
                            });
                        }
                    });

                 
                });
</script>