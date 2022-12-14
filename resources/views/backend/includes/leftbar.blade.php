
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ route('dashboard') }}" class="br-menu-link @yield('dashboard')">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        {{-- for slider --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Slider</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('addsliderview')}}" class="sub-link">Add Slider</a></li>
            
          
            <li class="sub-item"><a href="{{Route('manageslider')}}" class="sub-link">Manage Slider</a></li>

            <li class="sub-item"><a href="{{Route('slider.multi')}}" class="sub-link">Multi</a></li>
            
          </ul>
        </li>

        {{-- for category --}}

        {{-- <li class="br-menu-item">
          <a href="#"  class=" @yield('category') br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </a><!-- br-menu-link -->
            <li class="sub-item"><a href="" class="sub-link">Add Category</a></li>
            <li class="sub-item"><a href="{{Route('subcategoryview')}}" class="sub-link">Manage SubCategory</a></li>  
    
        </li> --}}

        <li class="br-menu-item">
          <a href="#" class=" @yield('category') br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            {{-- <li class="sub-item"><a href="{{ route('category.add') }}" class="sub-link">Add Category</a></li> --}}
            
            <li class="sub-item"><a href="{{Route('subcategoryview')}}" class="sub-link">Manage SubCategory</a></li>
          </ul>
        </li>


         {{-- for Product --}}
         <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Product</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('productview')}}" class="sub-link">Add Product</a></li>
            
        <li class="sub-item"><a href="{{Route('manageproductview')}}" class="sub-link">Manage Product</a></li> 
              
         
            
          </ul>

          

         
        </li>


       
      </ul>
        
        

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    