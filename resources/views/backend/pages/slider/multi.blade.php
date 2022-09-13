@extends('mastaring.master')
 
 @section('content')

  <div class="col-md-6 offset-2"  >

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
     @endif

 <form id="" method="POST" action="{{Route('slider.multistore')}}" enctype="multipart/form-data"
 >

     @csrf

     {{-- @error('product_name')

     <div class="alert alert-danger">

         {{$message}}
     </div>
         
     @enderror --}}

     <select name="slider_id" class="mt-3 form-control " >
        <option value=""> ------ Select Slider -------</option>

        @foreach ($multi as $item)

        <option value="{{$item->id}}">{{$item->title}}</option>

            
        @endforeach
        
     </select>

    <input type="file" name="multiimage[]" class="mt-3 form-control" multiple>

    <button type="submit" class="form-control mt-3 btn btn-success"> Save </button>

 </form>

</div>









 @endsection