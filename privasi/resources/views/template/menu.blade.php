
<div class="container body">
    <div class="main_container">
    <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border:0px solid black;">
              <a href="#" class="site_title"><i class="fa fa-truck"></i> <span><small>SISKARGO</small></span></a>
            </div>
            
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('/assets/images/logoawr.png')}}" alt="user" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
			
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              @if (auth()->user()->level == '1')
              <ul class="nav side-menu">
                    <h3>General</h3>
               <li><a href="/siskargo/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
               <!-- <li><a href="/siskargo/liststaff"><i class="fa fa-users"></i> List Staff </a></li> -->
               <li><a href="/siskargo/listuser"><i class="fa fa-users"></i> List Pengguna </a></li>
               <h3>Pengiriman</h3>
               <li><a href="/siskargo/listjenisbrg"><i class="fa fa-inbox"></i> Jenis Barang </a></li>
               <li><a href="/siskargo/listpengiriman"><i class="fa fa-truck"></i> List Pengiriman </a></li>
               <h3>Report</h3>
               <li><a href="/siskargo/reportbrgkirim"><i class="fa fa-file-pdf-o"></i> Barang Kiriman </a></li>
              <h3>Others</h3>
              <li><a href="/siskargo/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
              
                    </ul>
                    @else
                    <ul class="nav side-menu">
                    <h3>General</h3>
               <li><a href="/siskargo/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
               <!-- <li><a href="/siskargo/liststaff"><i class="fa fa-users"></i> List Staff </a></li> -->
               <h3>Pengiriman</h3>
               <li><a href="/siskargo/listpengiriman"><i class="fa fa-truck"></i> List Pengiriman </a></li>
               <h3>Others</h3>
              <li><a href="/siskargo/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
              
                    </ul>
                    @endif
                
                
				
              </div>
              
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>
        <!-- <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                 
				  <a class="user-profile dropdown-toggle">
                    <img src="{{ asset('/assets/prod/images/img.jpg')}}" alt="">asdam
                   
                  </a>
                
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
        <!-- /top navigation -->
        