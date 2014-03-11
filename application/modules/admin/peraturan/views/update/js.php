<script type='text/javascript'>
  $(function(){
  tinymce.init({
    selector: "#content",
    theme: "modern",
    height: 500,
    width:900,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor responsivefilemanager"
   ],
   
    toolbar1: "fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media | inserttime preview ",
    toolbar3: "forecolor backcolor table | hr removeformat | subscript superscript | charmap | print | ltr rtl | spellchecker | visualchars visualblocks nonbreaking pagebreak restoredraft |  emoticons fullscreen code ",
  image_advtab: true ,
   
   external_filemanager_path:"<?php echo base_url();?>wdc-assets/core/plugin/filemanager-berita/",
   filemanager_title:"Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo base_url();?>wdc-assets/core/plugin/filemanager-berita/plugin.min.js"}
 });
 
    
    
    
    $('.form').submit(function(){
        $('.submit').button('loading');
    });

  

});
</script>