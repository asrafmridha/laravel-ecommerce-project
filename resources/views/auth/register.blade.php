

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
     
        <!-- Validation Errors -->
         <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" />
            </div>

            
            <!-- Email Role -->
            <div class="mt-4">
                               <select name="role" id="role" class="form-control" :value="old('role')">
                    <option value="">-----Select Role-----</option>
                    <option value="1">Admin</option>
                    <option value="2">Vendor</option>
                    <option value="3">User</option>
                </select>
            </div>
            <!-- Email Phone -->
            <div class="mt-4">
                

                <x-input id="phone" class="form-control" type="number" name="phone" :value="old('phone')" />
            </div>
            <!-- Email Pic -->
            <div class="mt-4">
               

                <x-input id="pic" class="form-control" type="file" name="pic" :value="old('pic')" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                             autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" />
            </div>

            {{-- Social icon  --}}

            <a href="{{Route('gotogoogle')}}" class="btn btn-info mt-2"><i class="fab fa-google-plus-g"></i></a>

            <a href="" class="btn btn-info mt-2"><i class="fab fa-linkedin"></i></a>
            <a href="" class="btn btn-info mt-2"><i class="fab fa-google-plus-g"></i></a>
            <a href="" class="btn btn-info mt-2"><i class="fab fa-google-plus-g"></i></a>









            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
