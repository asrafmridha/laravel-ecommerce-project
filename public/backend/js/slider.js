jQuery(document).ready(function(){

     show();
    function show() {

        $.ajax({
            type: "GET",
            url: "/slider/sliderdatatable",
            dataType: "JSON",
            success: function (response) {
               
        var data= "";
        $.each(response.alldata, function (key, item) { 

          // var image = "<img height='100px' src='/backend/subcategory/"+item.image+"' />";
          data+='<tr>\
          <td>'+item.title+'</td>\
          <td>'+item.category+'</td>\
          <td>'+item.status+'</td>\
          <td><img width="150px" height="150px" src="/backend/slider/'+item.image +'"></td>\
            <td><button id="updatebtn" value="'+item.id+'" class="updateid btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit"></i></button> </td>\
            <td> <button value="'+item.id+'" class="deleteid btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button></td>\
          </tr>';
          
        });
        jQuery(".sliderdata").html(data);
        
                
            }
        });

      }


});