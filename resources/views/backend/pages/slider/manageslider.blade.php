@extends('mastaring.master')
 
 @section('content')

 <div class="col-md-7">

    <div class="slidermsg">
        
    </div>
    <table class="table">
       <thead>
            <tr>
            <th>Slider Title</th>
            <th>Category</th>  
            <th>status</th>
            <th>Image</th>
            <th>Action</th>
            </tr>
       </thead>
       <tbody class="sliderdata">


            
       </tbody>
    </table>

    
</div>


{{-- modal for delte Slider --}}
<!-- Button trigger modal -->
 <!-- Modal -->
 <div class="modal fade" id="sliderdeltemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
            Are You Sure Want to Delete?
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary slidermodalbutton">Confirm</button>
       </div>
     </div>
   </div>
 </div>


 {{-- modal for update Slider --}}


<!-- Modal -->
<div class="modal fade" id="updateslidermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   



 @endsection