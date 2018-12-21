<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title ?? config('app.name') }}</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller" id="app">
    <!-- partial:../../partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
            <search></search>
            <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">                           
              <notification></notification>
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  @auth
                    <img src="https://via.placeholder.com/39x39" alt="profile"/>
                    <span class="nav-profile-name">{{ auth()->user()->name }}</span>
                  @else
                    <span class="nav-profile-name">@lang('Hello, Guest')</span>
                  @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  @auth
                  <a href="#" class="dropdown-item">
                    <i class="icon-settings text-primary mr-2"></i>
                    @lang('Settings')
                  </a>
                  <a href="#" class="dropdown-item">
                    <i class="icon-key text-primary mr-2"></i>
                    @lang('API Keys')
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" class="dropdown-item">
                    <i class="icon-logout text-primary mr-2"></i>
                    @lang('Logout')
                  </a>
                  @else
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('login') }}" class="dropdown-item">
                      <i class="icon-login text-primary mr-2"></i>
                      @lang('Login')
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('register') }}" class="dropdown-item">
                        <i class="icon-user-follow text-primary mr-2"></i>
                        @lang('Register')
                      </a>
                    <div class="dropdown-divider"></div>
                  @endauth
                </div>
              </li>
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <router-link tag="li" :to="{name: 'home'}" active-class="active" class="nav-item" exact>
              <a href="#" class="nav-link"><i class="link-icon icon-home"></i><span class="menu-title">@lang('Home')</span></a>
            </router-link>

            <router-link tag="li" :to="{name: 'search'}" active-class="active" class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-magnifier"></i><span class="menu-title">@lang('Search')</span></a>
            </router-link>

            <router-link tag="li" :to="{name: 'blog-index'}" active-class="active" class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-notebook"></i><span class="menu-title">@lang('Blog')</span></a>
            </router-link>

            <router-link tag="li" :to="{name: 'contributor'}" active-class="active" class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-people"></i><span class="menu-title">@lang('Contributors')</span></a>
            </router-link>
            
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">@lang('Word Bank')</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Code Editor</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-link"></i><span class="menu-title">@lang('Official Links')</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/email.html">@lang('KBBI')</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/calendar.html">@lang('Glosarium')</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/todo.html">Todo List</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/gallery.html">Gallery</a></li>
                </ul>
              </div>
            </li>

            <router-link tag="li" :to="{name: 'contact'}" active-class="active" class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-envelope-letter"></i><span class="menu-title">@lang('Contact Us')</span></a>
            </router-link>

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-chemistry"></i><span class="menu-title">@lang('Apps')</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Code Editor</a></li>
                </ul>
              </div>
            </li>

            @auth
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-wrench"></i><span class="menu-title">@lang('Admin')</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item">
                    <router-link :to="{name: 'user-index'}" class="nav-link">@lang('Users')</router-link>
                  </li>
                </ul>
              </div>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <router-view></router-view>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">@lang('Copyright') &copy; 2019 <a href="http://www.urbanui.com/" target="_blank">{{ config('app.name') }}</a>. @lang('All rights reserved').</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">@lang('Hand-crafted & made with') <i class="icon-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->

  <!-- inject:js -->
  <script src="{{ asset('js/template.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
