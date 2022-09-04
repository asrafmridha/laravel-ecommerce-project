@extends('mastaring.master')
 
 @section('content')

 <div class="col-md-6">

    <form action="{{Route('sliderstore')}}"  method="POST" enctype="multipart/form-data"
    >

        @csrf

  </select>
  <span class="error_name"></span>
  <input type="text" name="category" class="mt-3 form-control name" placeholder="Enter Category name">


  
    <input type="text" name="title" class="mt-3 form-control image"
    placeholder="Enter Your Category Title here">

    {{-- <input type="text" name="description" class="mt-3 form-control description"
    placeholder="Enter  Category description here"> --}}

    <textarea name="description" name="description" class="mt-3 form-control" cols="60" rows="1"
    placeholder="Enter  Category description here"></textarea>

    <label class="mt-3 " for="">Enter Your Category Image Here</label>

    <input type="file" name="image" class=" form-control">

    <input type="text" name="link" class="mt-3 form-control" placeholder="Enter  Category link here" >

     <span class="error_status"></span>
    <select class="mt-3 form-control" name="status">
        <option value="">-----Select Status-----</option>
      
       <option value="1"> Active</option>
       <option value="2"> Inactive</option>

        
       
    </select>

  

      <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

    </form>
  </div>








      
   


    @endsection