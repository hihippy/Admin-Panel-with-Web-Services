<!DOCTYPE html>

<html lang="en">
  <head>
        @include('admin/layouts/head')
  </head>
         
<body>
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>

        <div id="pcoded" class="pcoded">
                      <div class="pcoded-overlay-box"></div>
                      <div class="pcoded-container navbar-wrapper">
                                    @include('admin.layouts.header')
                            <div class="pcoded-main-container">
                                <div class="pcoded-wrapper">
                                    @include('admin.layouts.sidebar')
                                    @yield('main-content')

                                </div>
                            </div>
                           
                      </div>
        </div>
                @include('admin.layouts.footer')
        </body>
</html>