jQuery(document).ready(function(){

  // for show 

  show();
  function show(){

    $.ajax({
      type: "GET",
      url: "/subcategoey/datatable",
      dataType: "JSON",
      success: function (response) {

        var data= "";
        $.each(response.alldata, function (key, item) { 

          // var image = "<img height='100px' src='/backend/subcategory/"+item.image+"' />";
          data+='<tr>\
          <td>'+item.cat_id+'</td>\
          <td>'+item.name+'</td>\
          <td>'+item.slug+'</td>\
            <td><img width="150px" height="150px" src="/backend/subcategory/'+item.image +'"></td>\
            <td><button id="updatebtn" value="'+item.id+'" class="updateid btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit"></i></button> </td>\
            <td> <button value="'+item.id+'" class="deleteid btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button></td>\
          </tr>';
          
        });
        jQuery(".data").html(data);
        
      }
    });

  }





//for add data 
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
          show();
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