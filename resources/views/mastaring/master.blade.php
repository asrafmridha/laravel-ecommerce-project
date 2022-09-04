<!DOCTYPE html>
<html lang="en">

  @include('backend.includes.header')

  @include('backend.includes.css')
  
  <body>
    
      @include('backend.includes.leftbar')

      @include('backend.includes.headbar')

      @include('backend.includes.rightbar')

      

       <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          @yield('content')
      </div><!-- row -->

      </div><!-- br-pagebody -->
     <div mt-5> 
      @include('backend.includes.footer')
    </div>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @include('backend.includes.script')
    

   
  </body>
</html>
