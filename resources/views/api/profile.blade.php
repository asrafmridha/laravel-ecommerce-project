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


    
    
     {{-- <div class="container">

        <div class="row mt-4">
            <div class="col-md-6">

                <h4>Registration Form</h4>
                {{-- action="{{Route('adduser')}}" --}}
                {{-- <form  action="{{Route('adduser')}}"   method="POST" >

                    @csrf
                <input type="text" name="uname" class="mt-3 form-control image"
                placeholder="User Name">
            
                 <input type="text" name="address" class="mt-3 form-control description"
                placeholder="Address">
            
                <input type="text" name="phone" class="mt-3 form-control description"
                placeholder="Phone">
            
                <input type="email" name="email" class="mt-3 form-control" placeholder="Email" >
            
                <input type="number" name="nid" class="mt-3 form-control" placeholder="nid" >
            
                  <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>
            
                </form>
            



            </div>
        </div>


     </div> 
 --}}

    {{-- <script>


    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>