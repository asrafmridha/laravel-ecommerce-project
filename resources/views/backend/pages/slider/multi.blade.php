@extends('mastaring.master')
 
 @section('content')

  <div class="col-md-6 offset-2"  >

 

 <form id="" method="POST" action="" enctype="multipart/form-data"
 >

     @csrf

     {{-- @error('product_name')

     <div class="alert alert-danger">

         {{$message}}
     </div>
         
     @enderror --}}

     <select name="status" class="mt-3 form-control " >
        <option value=""> ------ Select Slider -------</option>
        
     </select>

    <input type="file" name="image" class="mt-3 form-control" multiple>

 </form>

</div>









 @endsection