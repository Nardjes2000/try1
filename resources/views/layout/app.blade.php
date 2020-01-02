<!DOCTYPE html>

    <head>
        

        <title>Laravel.@yield('title')</title>
      
    </head>
    <body>
    	{{--comments--}}
      
       @include('layout/partials/nav',['age'=>'13'])
       @yield('content') 
       <footer>
       	 @yield('footer') 
       </footer>
        @yield('scripts.footer') 
    </body>
       
              

</html>