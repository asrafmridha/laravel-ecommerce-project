<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="row">

        <div class="col-md-6 offset-1 mt-5">

            
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">address</th>
            <th scope="col">phone</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$userview->name}}</th>
            <td>{{$userview->address}}</td>
            <td>{{$userview->phone}}</td>
            <td>{{$userview->email}}</td>
          </tr>
         
        </tbody>
      </table>
        </div>
    </div>

   <div class="container">

        <div class="row mt-4">
            <div class="col-md-6">

                <h4>App Information</h4>
               
            <form  action="{{Route('update',$userview->id)}}"   method="POST" >

                    @csrf
                <input type="text" name="appname" class="mt-3 form-control image"
                placeholder="User appname">
            
                 <input type="text" name="description" class="mt-3 form-control description"
                placeholder="description">
            
                <input type="text" name="url" class="mt-3 form-control description"
                placeholder="Url">

                  <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

                  <button type="button" value="{{$userview->id}}" class="form-control mt-3  btn btn-primary token"> Get Token&Client Id </button>
            
                </form>
            



            </div>
        </div>


     </div> 

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>

     $(document).ready(function () {

       $(document).on('click','.token', function(){
          var id=$(this).val();
          
           $.ajax({
            type: "GET",
            url: "api/gettoken/"+id,
            dataType: "JSON",
            success: function (response) {
              alert('response.token');
              
            }
           });
       
   

       });
        
      });

    </script>



</body>
</html>