@extends('mastaring.master')
 
 @section('content')

 <div class="col-md-6">

    @if(Session::has('message'))
   <p class="alert alert-info">{{ Session::get('message') }}</p>
   @endif

    <form action="{{Route('sliderstore')}}"  method="POST" enctype="multipart/form-data"
    >

        @csrf

        @error('category')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror

  <input type="text" name="category" class="mt-3 form-control name" placeholder="Enter Slider Name here">

  @error('title')
  <div class="alert alert-danger">

      {{$message}}
  </div>  
  @enderror
  
    <input type="text" name="title" class="mt-3 form-control image"
    placeholder="Enter Category Name">

    @error('description')
    <div class="alert alert-danger">
  
        {{$message}}
    </div>  
    @enderror

    <textarea name="description" name="description" class="mt-3 form-control" cols="60" rows="1"
    placeholder="Enter  Slider description here"></textarea>

    <label class="mt-3 " for="">Enter Your Category Image Here</label>

    @error('image')
    <div class="alert alert-danger">
  
        {{$message}}
    </div>  
    @enderror

    <input type="file" name="image" class=" form-control">

    @error('link')
    <div class="alert alert-danger">
  
        {{$message}}
    </div>  
    @enderror

    <input type="text" name="link" class="mt-3 form-control" placeholder="Enter  Category link here" >

    @error('status')
    <div class="alert alert-danger">
  
        {{$message}}
    </div>  
    @enderror

    <select class="mt-3 form-control" name="status">
        <option value="">-----Select Status-----</option>
      
       <option value="1"> Active</option>
       <option value="2"> Inactive</option>
       
    </select>

      <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

    </form>
  </div>








      
   


    @endsection