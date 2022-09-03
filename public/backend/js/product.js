jQuery(document).ready(function(){

   //value pass in modal button
  jQuery(document).on('click','.deleteproduct',function () {
        
    var id= jQuery(this).val();
     jQuery('.deletemodalproduct').val(id);

  });

   jQuery(document).on('click','.deletemodalproduct',function(){
    
     var id=jQuery(this).val();
        $.ajax({
            type: "GET",
            url: "/product/deletesubproduct/"+id,
            dataType: "JSON",
            success: function (response) {
                jQuery("#deleteModalproduct").modal("hide");
                alert('delete Successfully');
            }
        });

   });







});