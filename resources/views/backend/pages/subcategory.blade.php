@extends('mastaring.master')
 
 @section('content')
      
    <div class="col-md-6">

        <form id="subcategoryform" action="{{route('addsubcategory')}}" method="POST" enctype="multipart/form-data">
    
      <select class="mt-3 form-control branch_id">
          <option value="">-----Select Category-----</option>
        
         <option value=""> Asraf</option>

          
         
      </select>
      <input type="text" class="mt-3 form-control name" placeholder="Enter SubCategory name">

    
      
        <input type="file" class="mt-3 form-control image" placeholder="Enter Image">

      
        <select class="mt-3 form-control branch_id">
            <option value="">-----Select Status-----</option>
          
           <option value=""> Active</option>
           <option value=""> Inactive</option>
  
            
           
        </select>

      

          <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

        </form>
      </div>


    @endsection