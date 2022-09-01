@extends('mastaring.master')
 
 @section('content')
      
 <div class="row"> 
    <div class="col-md-5">
      <span class="msg text-success"></span>

        <form id="subcategoryform" method="POST" enctype="multipart/form-data"
        >

            @csrf
    
      <select name="categoryitem" class="mt-3 form-control ">
          <option value="">-----Select Category-----</option>
        
         <option value="1"> Asraf</option>
         <span class="error_category"></span>

          
         
      </select>
      
      <input type="text" name="name" class="mt-3 form-control name" placeholder="Enter SubCategory name">
      <span class="error_name text-danger"></span>
    
      
        <input type="file" name="image" class="mt-3 form-control image">
        <span class="error_image text-danger"></span>
         
        <select class="mt-3 form-control " name="status">
            <option value="">-----Select Status-----</option>
          
           <option value="1"> Active</option>
           <option value="2"> Inactive</option> 
        </select>

        <span class="error_status text-danger"></span>

      

          <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

        </form>
      </div>

      <div class="col-md-7">
        <table class="table">
           <thead>
                <tr>
                   <th>Category Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th >Action</th>
                </tr>
           </thead>
           <tbody class="data">
                
           </tbody>
        </table>
   </div>

  </div>


    @endsection
    