jQuery(document).ready(function(){

jQuery('#subcategoryform').on("submit",function(e){

    e.preventDefault();
    let formData = new FormData(this);
    
    $.ajax({
        type: "POST",
        url: "/subcategoey/addsubcategory",
        data: formData,
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function (response) {

        if(response.status=="failed"){
          jQuery('.error_name').text(response.errors.name);
          jQuery('.error_image').text(response.errors.image);
          jQuery('.error_status').text(response.errors.status);
         
        }
        else{

          jQuery('.msg').text('Data Save Successfully');
          jQuery('.msg').fadeOut(1000);
          jQuery('.name').val('');
          jQuery('.status').val('');
          jQuery('.image').val('');




        }
            
        }
    });
})


});