jQuery(document).ready(function(){

   //value pass in modal button
  jQuery(document).on('click','.deleteproduct',function () {
        
    var id= jQuery(this).val();
     jQuery('.deletemodalproduct').val(id);

  });







});